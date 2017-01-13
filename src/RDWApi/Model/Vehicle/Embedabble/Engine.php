<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Engine
{
    /**
     * 'aantal_cilinders'
     * @var int
     */
    private $numberOfCilinders;

    /**
     * 'cilinderinhoud'
     * @var int
     */
    private $cylinderCapacity;

    /**
     * 'vermogen_massarijklaar'
     * @var float
     */
    private $powerCurbMass;

    /**
     * 'zuinigheidslabel'
     * @var string
     */
    private $economyLabel;

    /**
     * @param int $numberOfCilinders
     * @param int $cylinderCapacity
     * @param float $powerCurbMass
     * @param string $economyLabel
     */
    public function __construct($numberOfCilinders, $cylinderCapacity, $powerCurbMass, $economyLabel)
    {
        $this->numberOfCilinders = $numberOfCilinders;
        $this->cylinderCapacity = $cylinderCapacity;
        $this->powerCurbMass = $powerCurbMass;
        $this->economyLabel = $economyLabel;
    }

    /**
     * @return int
     */
    public function getNumberOfCilinders()
    {
        return $this->numberOfCilinders;
    }

    /**
     * @return int
     */
    public function getCylinderCapacity()
    {
        return $this->cylinderCapacity;
    }

    /**
     * @return float
     */
    public function getPowerCurbMass()
    {
        return $this->powerCurbMass;
    }

    /**
     * @return string
     */
    public function getEconomyLabel()
    {
        return $this->economyLabel;
    }
}
