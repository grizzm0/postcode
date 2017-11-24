<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Andorra.
 *
 * Postcodes consist of the letters AD, followed by 3 digits, without separator.
 * This formatter accepts the 3 digits with and without the AD prefix, and always outputs with the prefix.
 *
 * @see https://en.wikipedia.org/wiki/Postal_codes_in_Andorra
 */
class ADFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if (substr($postcode, 0, 2) === 'AD') {
            $postcode = substr($postcode, 2);
        }

        if (strlen($postcode) !== 3) {
            return null;
        }

        if (! ctype_digit($postcode)) {
            return null;
        }

        return 'AD' . $postcode;
    }
}