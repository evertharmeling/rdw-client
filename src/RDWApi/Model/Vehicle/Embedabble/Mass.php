<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Mass
{
    /**
     * 'massa_ledig_voertuig'
     * @var int
     */
    private $emptyVehicle;

    /**
     * 'massa_rijklaar'
     * @var int
     */
    private $roadworthy;

    /**
     * 'technische_max_massa_voertuig'
     * @var int
     */
    private $technicalMaximum;

    /**
     * 'toegestane_maximum_massa_voertuig'
     * @var int
     */
    private $allowedMaximum;

    /**
     * @param int $emptyVehicle
     * @param int $roadworthy
     * @param int $technicalMaximum
     * @param int $allowedMaximum
     */
    public function __construct($emptyVehicle, $roadworthy, $technicalMaximum, $allowedMaximum)
    {
        $this->emptyVehicle = $emptyVehicle;
        $this->roadworthy = $roadworthy;
        $this->technicalMaximum = $technicalMaximum;
        $this->allowedMaximum = $allowedMaximum;
    }

    /**
     * @return int
     */
    public function getEmptyVehicle()
    {
        return $this->emptyVehicle;
    }

    /**
     * @return int
     */
    public function getRoadworthy()
    {
        return $this->roadworthy;
    }

    /**
     * @return int
     */
    public function getTechnicalMaximum()
    {
        return $this->technicalMaximum;
    }

    /**
     * @return int
     */
    public function getAllowedMaximum()
    {
        return $this->allowedMaximum;
    }
}
