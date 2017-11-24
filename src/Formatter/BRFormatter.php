<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Brazil.
 *
 * Format is 5 digits, hyphen, 3 digits.
 * The old format that used 5 digits is not accepted by this formatter.
 *
 * @see https://en.wikipedia.org/wiki/C%C3%B3digo_de_Endere%C3%A7amento_Postal
 */
class BRFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if (strlen($postcode) !== 8) {
            return null;
        }

        if (! ctype_digit($postcode)) {
            return null;
        }

        return substr($postcode, 0, 5) . '-' . substr($postcode, 5);
    }
}
