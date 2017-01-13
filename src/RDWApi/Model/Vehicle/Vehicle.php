<?php

namespace RDWApi\Model\Vehicle;

use RDWApi\Model\Vehicle\Embedabble\Classification;
use RDWApi\Model\Vehicle\Embedabble\Dates;
use RDWApi\Model\Vehicle\Embedabble\Dimensions;
use RDWApi\Model\Vehicle\Embedabble\Engine;
use RDWApi\Model\Vehicle\Embedabble\Financial;
use RDWApi\Model\Vehicle\Embedabble\Insurance;
use RDWApi\Model\Vehicle\Embedabble\LicensePlate;
use RDWApi\Model\Vehicle\Embedabble\Mass;
use RDWApi\Model\Vehicle\Embedabble\TechnicalData;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Vehicle
{
    /**
     * @var LicensePlate
     */
    private $licensePlate;

    /**
     * @var Brand
     */
    private $brand;

    /**
     * @var Classification
     */
    private $classification;

    /**
     * @var Engine
     */
    private $engine;

    /**
     * @var Dimensions
     */
    private $dimensions;

    /**
     * @var TechnicalData
     */
    private $technicalData;

    /**
     * @var Mass
     */
    private $mass;

    /**
     * @var Dates
     */
    private $dates;

    /**
     * @var Financial
     */
    private $financial;

    /**
     * @var Insurance
     */
    private $insurance;

    /**
     * @param LicensePlate $licensePlate
     * @param Brand $brand
     * @param Classification $classification
     * @param Engine $engine
     * @param Dimensions $dimensions
     * @param TechnicalData $technicalData
     * @param Mass $mass
     * @param Dates $dates
     * @param Financial $financial
     * @param Insurance $insurance
     */
    public function __construct(
        LicensePlate $licensePlate,
        Brand $brand,
        Classification $classification,
        Engine $engine,
        Dimensions $dimensions,
        TechnicalData $technicalData,
        Mass $mass,
        Dates $dates,
        Financial $financial,
        Insurance $insurance
    ) {
        $this->licensePlate = $licensePlate;
        $this->brand = $brand;
        $this->classification = $classification;
        $this->engine = $engine;
        $this->dimensions = $dimensions;
        $this->technicalData = $technicalData;
        $this->mass = $mass;
        $this->dates = $dates;
        $this->financial = $financial;
        $this->insurance = $insurance;
    }

    /**
     * @return LicensePlate
     */
    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return Classification
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @return Engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @return TechnicalData
     */
    public function getTechnicalData()
    {
        return $this->technicalData;
    }

    /**
     * @return Mass
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * @return Dates
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @return Financial
     */
    public function getFinancial()
    {
        return $this->financial;
    }

    /**
     * @return Insurance
     */
    public function getInsurance()
    {
        return $this->insurance;
    }
}
