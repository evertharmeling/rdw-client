<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Dimensions
{
    /**
     * 'breedte'
     * @var int|null
     */
    private $width;

    /**
     * 'lengte'
     * @var int
     */
    private $length;

    /**
     * 'wielbasis'
     * @var int
     */
    private $wheelBase;

    /**
     * 'afstand_hart_koppeling_tot_achterzijde_voertuig'
     * @var int|null
     */
    private $distanceClutchToBack;

    /**
     * 'afstand_voorzijde_voertuig_tot_hart_koppeling'
     * @var int|null
     */
    private $distanceFrontToClutch;

    /**
     * @param int|null $width
     * @param int $length
     * @param int $wheelBase
     * @param int|null $distanceClutchToBack
     * @param int|null $distanceFrontToClutch
     */
    public function __construct($width, $length, $wheelBase, $distanceClutchToBack, $distanceFrontToClutch)
    {
        $this->width = $width;
        $this->length = $length;
        $this->wheelBase = $wheelBase;
        $this->distanceClutchToBack = $distanceClutchToBack;
        $this->distanceFrontToClutch = $distanceFrontToClutch;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getWheelBase()
    {
        return $this->wheelBase;
    }

    /**
     * @return int|null
     */
    public function getDistanceClutchToBack()
    {
        return $this->distanceClutchToBack;
    }

    /**
     * @return int|null
     */
    public function getDistanceFrontToClutch()
    {
        return $this->distanceFrontToClutch;
    }
}
