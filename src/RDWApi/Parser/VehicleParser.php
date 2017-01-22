<?php

namespace RDWApi\Parser;

use RDWApi\Exception\InvalidResponseException;
use RDWApi\Formatter\LicensePlateFormatter;
use RDWApi\Model\Vehicle\Brand;
use RDWApi\Model\Vehicle\Embedabble\Classification;
use RDWApi\Model\Vehicle\Embedabble\Dates;
use RDWApi\Model\Vehicle\Embedabble\Dimensions;
use RDWApi\Model\Vehicle\Embedabble\Engine;
use RDWApi\Model\Vehicle\Embedabble\Financial;
use RDWApi\Model\Vehicle\Embedabble\Insurance;
use RDWApi\Model\Vehicle\Embedabble\LicensePlate;
use RDWApi\Model\Vehicle\Embedabble\Mass;
use RDWApi\Model\Vehicle\Embedabble\TechnicalData;
use RDWApi\Model\Vehicle\Vehicle;

/**
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen%20v3.0.pdf
 *
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class VehicleParser implements VehicleParserInterface
{
    /**
     * @param array $response
     * @return Vehicle
     * @throws InvalidResponseException
     */
    public static function parse($response)
    {
        if (!is_array($response)) {
            throw new InvalidResponseException();
        }

        /** @var \stdClass $result */
        $result = current($response);

        return new Vehicle(
            new LicensePlate(LicensePlateFormatter::formatLicensePlate($result->kenteken)),
            new Brand($result->merk),
            new Classification(
                $result->handelsbenaming,
                $result->voertuigsoort,
                $result->inrichting,
                $result->uitvoering,
                $result->variant,
                $result->typegoedkeuringsnummer,
                $result->europese_voertuigcategorie,
                $result->volgnummer_wijziging_eu_typegoedkeuring
            ),
            new Engine(
                self::intify($result->aantal_cilinders),
                self::intify($result->cilinderinhoud),
                self::floatify($result->vermogen_massarijklaar),
                $result->zuinigheidslabel
            ),
            new Dimensions(
                self::intify($result->breedte),
                self::intify($result->lengte),
                self::intify($result->wielbasis),
                self::intify($result->afstand_hart_koppeling_tot_achterzijde_voertuig),
                self::intify($result->afstand_voorzijde_voertuig_tot_hart_koppeling)
            ),
            new TechnicalData(
                self::intify($result->aantal_zitplaatsen),
                self::intify($result->aantal_deuren),
                self::intify($result->aantal_wielen),
                $result->eerste_kleur,
                self::sanitize($result->tweede_kleur),
                $result->plaats_chassisnummer
            ),
            new Mass(
                self::intify($result->massa_ledig_voertuig),
                self::intify($result->massa_rijklaar),
                self::intify($result->technische_max_massa_voertuig),
                self::intify($result->toegestane_maximum_massa_voertuig)
            ),
            new Dates(
                self::datify($result->datum_eerste_afgifte_nederland),
                self::datify($result->datum_eerste_toelating),
                self::datify($result->datum_tenaamstelling),
                self::datify($result->vervaldatum_apk)
            ),
            new Financial(
                self::intify($result->bruto_bpm),
                self::intify($result->catalogusprijs)
            ),
            new Insurance(
                self::boolify($result->wam_verzekerd),
                self::boolify($result->wacht_op_keuren),
                self::boolify($result->export_indicator)
            )
        );
    }

    /**
     * @param mixed $value
     * @return int|null
     */
    private static function intify($value)
    {
        return $value == '0' ? null : (int) $value;
    }

    /**
     * @param mixed $value
     * @return float|null
     */
    private static function floatify($value)
    {
        return $value == '0' ? null : (float) $value;
    }

    /**
     * @param mixed $value
     * @return bool
     */
    private static function boolify($value)
    {
        return $value === 'Ja';
    }

    /**
     * @param mixed $value
     * @return bool|\DateTimeImmutable
     */
    private static function datify($value)
    {
        return \DateTimeImmutable::createFromFormat('d/m/Y', $value);
    }

    /**
     * @param string $value
     * @return null|string
     */
    public static function sanitize($value)
    {
        return $value === 'Niet geregistreerd' ? null : $value;
    }
}
