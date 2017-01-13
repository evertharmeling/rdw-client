<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Financial
{
    /**
     * 'bruto_bpm'
     * @var int|null
     */
    private $grossTax;

    /**
     * 'catalogusprijs'
     * @var int
     */
    private $catalogPrice;

    /**
     * @param int|null $grossTax
     * @param int $catalogPrice
     */
    public function __construct($grossTax, $catalogPrice)
    {
        $this->grossTax = $grossTax;
        $this->catalogPrice = $catalogPrice;
    }

    /**
     * @return int|null
     */
    public function getGrossTax()
    {
        return $this->grossTax;
    }

    /**
     * @return int
     */
    public function getCatalogPrice()
    {
        return $this->catalogPrice;
    }
}
