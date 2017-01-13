<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Classification
{
    /**
     * 'handelsbenaming'
     * @var string
     */
    private $type;

    /**
     * 'voertuigsoort'
     * @var string
     */
    private $sort;

    /**
     * 'inrichting'
     * @var string
     */
    private $typing;

    /**
     * 'uitvoering'
     * @var string
     */
    private $version;

    /**
     * 'variant'
     * @var string
     */
    private $variant;

    /**
     * 'typegoedkeuringsnummer'
     * @var string
     */
    private $approvalNumber;

    /**
     * 'europese_voertuigcategorie'
     * @var string
     */
    private $europeanVehicleCategory;

    /**
     * 'volgnummer_wijziging_eu_typegoedkeuring'
     * @var string
     */
    private $europeanNumberApproval;

    /**
     * @param string $type
     * @param string $sort
     * @param string $typing
     * @param string $version
     * @param string $variant
     * @param string $approvalNumber
     * @param string $europeanVehicleCategory
     * @param string $europeanNumberApproval
     */
    public function __construct(
        $type, $sort, $typing, $version, $variant, $approvalNumber, $europeanVehicleCategory, $europeanNumberApproval
    ) {
        $this->type = $type;
        $this->sort = $sort;
        $this->typing = $typing;
        $this->version = $version;
        $this->variant = $variant;
        $this->approvalNumber = $approvalNumber;
        $this->europeanVehicleCategory = $europeanVehicleCategory;
        $this->europeanNumberApproval = $europeanNumberApproval;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @return string
     */
    public function getTyping()
    {
        return $this->typing;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @return string
     */
    public function getApprovalNumber()
    {
        return $this->approvalNumber;
    }

    /**
     * @return string
     */
    public function getEuropeanVehicleCategory()
    {
        return $this->europeanVehicleCategory;
    }

    /**
     * @return string
     */
    public function getEuropeanNumberApproval()
    {
        return $this->europeanNumberApproval;
    }
}
