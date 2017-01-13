<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Insurance
{
    /**
     * 'wam_verzekerd'
     * @var bool
     */
    private $insured;

    /**
     * 'wacht_op_keuren'
     * @var bool
     */
    private $waitingOnExamination;

    /**
     * 'export_indicator'
     * @var bool
     */
    private $exported;

    /**
     * @param bool $insured
     * @param bool $waitingOnExamination
     * @param bool $exported
     */
    public function __construct($insured, $waitingOnExamination, $exported)
    {
        $this->insured = $insured;
        $this->waitingOnExamination = $waitingOnExamination;
        $this->exported = $exported;
    }

    /**
     * @return bool
     */
    public function isInsured()
    {
        return $this->insured;
    }

    /**
     * @return bool
     */
    public function isWaitingOnExamination()
    {
        return $this->waitingOnExamination;
    }

    /**
     * @return bool
     */
    public function isExported()
    {
        return $this->exported;
    }
}
