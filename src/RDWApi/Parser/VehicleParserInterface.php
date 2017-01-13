<?php

namespace RDWApi\Parser;

use RDWApi\Model\Vehicle\Vehicle;

/**
 * @author Evert Harmeling <evertharmeling@gmail.com>
 */
interface VehicleParserInterface
{
    /**
     * @param array $response
     * @return Vehicle
     */
    public static function parse($response);
}
