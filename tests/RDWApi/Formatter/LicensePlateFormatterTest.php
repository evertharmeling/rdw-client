<?php

namespace RDWApi\Formatter;

/**
 * @author Evert Harmeling <evert@freshheads.com>
 */
class LicensePlateFormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider licensePlateProvider
     */
    public function testFormatter($input, $formatted)
    {
        static::assertEquals($formatted, LicensePlateFormatter::formatLicensePlate($input));
    }

    public function licensePlateProvider()
    {
        return [
            [ 'XX-99-99', 'XX-99-99' ],
            [ 'XX9999', 'XX-99-99' ],
            [ 'xx9999', 'XX-99-99' ],
            [ '99-99-XX', '99-99-XX' ],
            [ '9999XX', '99-99-XX' ],
            [ '9999xx', '99-99-XX' ],
            [ '99-XX-99', '99-XX-99' ],
            [ '99XX99', '99-XX-99' ],
            [ '99xx99', '99-XX-99' ],
            [ 'XX-99-XX', 'XX-99-XX' ],
            [ 'XX99XX', 'XX-99-XX' ],
            [ 'xx99xx', 'XX-99-XX' ],
            [ 'XX-XX-99', 'XX-XX-99' ],
            [ 'XXXX99', 'XX-XX-99' ],
            [ 'xxxx99', 'XX-XX-99' ],
            [ '99-XX-XX', '99-XX-XX' ],
            [ '99XXXX', '99-XX-XX' ],
            [ '99xxxx', '99-XX-XX' ],
            [ '99-XXX-9', '99-XXX-9' ],
            [ '99XXX9', '99-XXX-9' ],
            [ '99xxx9', '99-XXX-9' ],
            [ '9-XXX-99', '9-XXX-99' ],
            [ '9XXX99', '9-XXX-99' ],
            [ '9xxx99', '9-XXX-99' ],
            [ 'XX-999-X', 'XX-999-X' ],
            [ 'XX999X', 'XX-999-X' ],
            [ 'xx999x', 'XX-999-X' ],
            [ 'X-999-XX', 'X-999-XX' ],
            [ 'X999XX', 'X-999-XX' ],
            [ 'x999xx', 'X-999-XX' ],
            [ 'XXX-99-X', 'XXX-99-X' ],
            [ 'XXX99X', 'XXX-99-X' ],
            [ 'xxx99x', 'XXX-99-X' ],
            [ 'X-99-XXX', 'X-99-XXX' ],
            [ 'X99XXX', 'X-99-XXX' ],
            [ 'x99xxx', 'X-99-XXX' ],
            [ '9-XX-999', '9-XX-999' ],
            [ '9XX999', '9-XX-999' ],
            [ '9xx999', '9-XX-999' ],
            [ '999-XX-9', '999-XX-9' ],
            [ '999XX9', '999-XX-9' ],
            [ '999xx9', '999-XX-9' ]
        ];
    }
}
