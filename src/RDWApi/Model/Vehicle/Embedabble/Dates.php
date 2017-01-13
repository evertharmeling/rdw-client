<?php

namespace RDWApi\Model\Vehicle\Embedabble;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
class Dates
{
    /**
     * 'datum_eerste_afgifte_nederland'
     * @var \DateTimeImmutable
     */
    private $firstIssue;

    /**
     * 'datum_eerste_toelating'
     * @var \DateTimeImmutable
     */
    private $firstAdmission;

    /**
     * 'datum_tenaamstelling'
     * @var \DateTimeImmutable
     */
    private $ascription;

    /**
     * 'vervaldatum_apk'
     * @var \DateTimeImmutable
     */
    private $technicalExaminationExpiration;

    /**
     * @param \DateTimeImmutable $firstIssue
     * @param \DateTimeImmutable $firstAdmission
     * @param \DateTimeImmutable $ascription
     * @param \DateTimeImmutable $technicalExaminationExpiration
     */
    public function __construct(
        \DateTimeImmutable $firstIssue,
        \DateTimeImmutable $firstAdmission,
        \DateTimeImmutable $ascription,
        \DateTimeImmutable $technicalExaminationExpiration
    ) {
        $this->firstIssue = $firstIssue;
        $this->firstAdmission = $firstAdmission;
        $this->ascription = $ascription;
        $this->technicalExaminationExpiration = $technicalExaminationExpiration;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getFirstIssue()
    {
        return $this->firstIssue;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getFirstAdmission()
    {
        return $this->firstAdmission;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getAscription()
    {
        return $this->ascription;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getTechnicalExaminationExpiration()
    {
        return $this->technicalExaminationExpiration;
    }
}
