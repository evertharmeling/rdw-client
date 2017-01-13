<?php

namespace RDWApi\Client;

use GuzzleHttp\Psr7\Request;
use Http\Client\Exception\RequestException;
use Http\Client\HttpClient;
use Psr\Http\Message\ResponseInterface;
use RDWApi\Exception\InvalidResponseException;
use RDWApi\Model\Vehicle\Vehicle;
use RDWApi\Parser\VehicleParserInterface;

/**
//            +"api_gekentekende_voertuigen_assen": "https://opendata.rdw.nl/resource/3huj-srit.json"
//            +"api_gekentekende_voertuigen_brandstof": "https://opendata.rdw.nl/resource/8ys7-d773.json"
//            +"api_gekentekende_voertuigen_carrosserie": "https://opendata.rdw.nl/resource/vezc-m2t6.json"
//            +"api_gekentekende_voertuigen_carrosserie_specifiek": "https://opendata.rdw.nl/resource/jhie-znh9.json"
//            +"api_gekentekende_voertuigen_voertuigklasse": "https://opendata.rdw.nl/resource/kmfi-hrps.json"
 *
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Client
{
    const BASE_URL  = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json';

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var VehicleParserInterface
     */
    private $responseParser;

    public function __construct(HttpClient $httpClient, VehicleParserInterface $responseParser)
    {
        $this->httpClient = $httpClient;
        $this->responseParser = $responseParser;
    }

    /**
     * @param string $licensePlate
     * @return Vehicle
     */
    public function getInfo($licensePlate)
    {
        // @todo handle 404

        return $this->responseParser->parse($this->get([
            'kenteken' => $licensePlate
        ]));
    }

    /**
     * @param array $params
     *
     * @return array|\stdClass
     *
     * @throws RequestException
     */
    private function get(array $params = [])
    {
        $request = $this->createHttpGetRequest(self::BASE_URL, $params);

        $response = $this->httpClient->sendRequest($request);

        return $this->parseResponse($response);
    }

    /**
     * @param string $url
     * @param array $params
     *
     * @return Request
     */
    private function createHttpGetRequest($url, array $params = [])
    {
        $url .= (count($params) > 0 ? '?' . http_build_query($params, null, '&', PHP_QUERY_RFC3986) : '');

        return new Request('GET', $url);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     * @throws InvalidResponseException
     */
    private function parseResponse(ResponseInterface $response)
    {
        $result = json_decode((string) $response->getBody()->getContents());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidResponseException('Could not parse response', $response);
        }

        // @todo handle errors

        return $result;
    }
}
