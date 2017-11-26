<?php

declare(strict_types=1);

namespace Brick\Postcode\Tests\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;
use Brick\Postcode\Formatter\GLFormatter;
use Brick\Postcode\Tests\CountryPostcodeFormatterTest;

/**
 * Unit tests for the GL postcode formatter.
 */
class GLFormatterTest extends CountryPostcodeFormatterTest
{
    /**
     * {@inheritdoc}
     */
    protected function getFormatter() : CountryPostcodeFormatter
    {
        return new GLFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function providerFormat() : array
    {
        return [
            ['', null],

            ['1', null],
            ['12', null],
            ['123', null],
            ['1234', '1234'],
            ['12345', null],

            ['A', null],
            ['AB', null],
            ['ABC', null],
            ['ABCD', null],
            ['ABCDE', null],
        ];
    }
}
