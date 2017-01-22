<?php

namespace RDWApi\Formatter;

/**
 * @author Evert Harmeling <evert@freshheads.com>
 */
class LicensePlateFormatter
{
    /**
     * Formats the license plate with '-', when no valid format is provided false is returned
     *
     * XX-99-99, 99-99-XX, 99-XX-99, XX-99-XX, XX-XX-99, 99-XX-XX, 99-XXX-9, 9-XXX-99, XX-999-X, X-999-XX, XXX-99-X,
     * X-99-XXX, 9-XX-999, 999-XX-9
     *
     * @link https://nl.wikipedia.org/wiki/Nederlands_kenteken#Alle_sidecodes
     * @param string $value
     * @return false|string
     */
    public static function formatLicensePlate($value)
    {
        $value = strtoupper($value);

        $regexes = [
            '/^([A-Z]{2})-?([0-9]{2})-?([0-9]{2})$/',
            '/^([0-9]{2})-?([0-9]{2})-?([A-Z]{2})$/',
            '/^([0-9]{2})-?([A-Z]{2})-?([0-9]{2})$/',
            '/^([A-Z]{2})-?([0-9]{2})-?([A-Z]{2})$/',
            '/^([A-Z]{2})-?([A-Z]{2})-?([0-9]{2})$/',
            '/^([0-9]{2})-?([A-Z]{2})-?([A-Z]{2})$/',
            '/^([0-9]{2})-?([A-Z]{3})-?([0-9]{1})$/',
            '/^([0-9]{1})-?([A-Z]{3})-?([0-9]{2})$/',
            '/^([A-Z]{2})-?([0-9]{3})-?([A-Z]{1})$/',
            '/^([A-Z]{1})-?([0-9]{3})-?([A-Z]{2})$/',
            '/^([A-Z]{3})-?([0-9]{2})-?([A-Z]{1})$/',
            '/^([A-Z]{1})-?([0-9]{2})-?([A-Z]{3})$/',
            '/^([0-9]{1})-?([A-Z]{2})-?([0-9]{3})$/',
            '/^([0-9]{3})-?([A-Z]{2})-?([0-9]{1})$/',
        ];

        foreach ($regexes as $regex) {
            preg_match($regex, $value, $matches);
            if (count($matches) === 4) {
                return sprintf('%s-%s-%s', $matches[1], $matches[2], $matches[3]);
            }
        }

        return false;
    }
}
