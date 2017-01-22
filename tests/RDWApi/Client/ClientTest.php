<?php

namespace RDWApi\Client;

use GuzzleHttp\Psr7\Response;
use RDWApi\Model\Vehicle\Vehicle;
use RDWApi\Parser\VehicleParser;
use RDWApi\Parser\VehicleParserInterface;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    const LICENSE_PLATE = '73-SXR-7';

    public function testGetInfo()
    {
        $client = $this->createClient($this->loadMockResponse('response.get_license_plate'));

        $vehicle = $client->getInfo(self::LICENSE_PLATE);

        static::assertInstanceOf(Vehicle::class, $vehicle);
        static::assertEquals(self::LICENSE_PLATE, $vehicle->getLicensePlate()->getValue());
    }

    /**
     * @expectedException \RDWApi\Exception\VehicleNotFoundException
     */
    public function testInvalidLicensePlate()
    {
        $client = $this->createClient($this->loadMockResponse('response.invalid_license_plate'));

        $vehicle = $client->getInfo('test');
    }

    /**
     * @param string $name
     * @return Response
     */
    private function loadMockResponse($name)
    {
        list($dir, $name) = explode('.', $name);

        return \GuzzleHttp\Psr7\parse_response(
            file_get_contents(
                sprintf('%s/../../Mock/%s/%s', __DIR__, ucfirst($dir), $name)
            )
        );
    }

    /**
     * @param Response $mockedResponse
     *
     * @return Client
     */
    private function createClient(Response $mockedResponse)
    {
        $httpClient = new \Http\Mock\Client();
        $httpClient->addResponse($mockedResponse);

        return new Client($httpClient, new VehicleParser());
    }
}
