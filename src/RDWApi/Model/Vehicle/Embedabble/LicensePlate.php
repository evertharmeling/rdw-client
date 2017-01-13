<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class LicensePlate
{
    /**
     * 'kenteken'
     * @var string
     */
    private $value;

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
