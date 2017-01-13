<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class TechnicalData
{
    /**
     * 'aantal_zitplaatsen'
     * @var int
     */
    private $numberOfSeats;

    /**
     * 'aantal_deuren'
     * @var int
     */
    private $numberOfDoors;

    /**
     * 'aantal_wielen'
     * @var int
     */
    private $numberOfWheels;

    /**
     * 'eerste_kleur'
     * @var string
     */
    private $primaryColor;

    /**
     * 'tweede_kleur'
     * @var string
     */
    private $secondaryColor;

    /**
     * 'plaats_chassisnummer'
     * @var string
     */
    private $locationChassisNumber;

    /**
     * @param int $numberOfSeats
     * @param int $numberOfDoors
     * @param int $numberOfWheels
     * @param string $primaryColor
     * @param string $secondaryColor
     * @param string $locationChassisNumber
     */
    public function __construct(
        $numberOfSeats, $numberOfDoors, $numberOfWheels, $primaryColor, $secondaryColor, $locationChassisNumber
    ) {
        $this->numberOfSeats = $numberOfSeats;
        $this->numberOfDoors = $numberOfDoors;
        $this->numberOfWheels = $numberOfWheels;
        $this->primaryColor = $primaryColor;
        $this->secondaryColor = $secondaryColor;
        $this->locationChassisNumber = $locationChassisNumber;
    }

    /**
     * @return int
     */
    public function getNumberOfSeats()
    {
        return $this->numberOfSeats;
    }

    /**
     * @return int
     */
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    /**
     * @return int
     */
    public function getNumberOfWheels()
    {
        return $this->numberOfWheels;
    }

    /**
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->primaryColor;
    }

    /**
     * @return string
     */
    public function getSecondaryColor()
    {
        return $this->secondaryColor;
    }

    /**
     * @return string
     */
    public function getLocationChassisNumber()
    {
        return $this->locationChassisNumber;
    }
}
