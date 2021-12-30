<?php

declare(strict_types=1);

namespace Chiron\Sniffs\Arrays;

use Chiron\Tests\AbstractSniffUnitTest;

/**
 * Unit test class for the DuplicateKeyUnitTest sniff.
 */
class DuplicateKeyUnitTest extends AbstractSniffUnitTest
{
    /**
     * @return array
     */
    protected function getErrorList(): array
    {
        return [
            3 => 1,
            9 => 1,
            11 => 1,
            15 => 1,
            17 => 1,
            18 => 1,
            19 => 1,
            21 => 1,
            26 => 1,
            33 => 1,
            34 => 1,
            35 => 1,
            40 => 1,
            41 => 1,
            42 => 1,
            47 => 1,
            49 => 1,
            54 => 1,
            56 => 1,
            61 => 1,
            63 => 1,
            68 => 1,
            70 => 1,
            75 => 1,
            77 => 1,
            82 => 1,
            84 => 1,
            89 => 1,
            90 => 1,
            91 => 1,
            94 => 1,
            96 => 1,
            99 => 1,
            101 => 1,
            104 => 1,
            106 => 1,
            109 => 1,
            111 => 1,
            114 => 1,
            115 => 1,
            116 => 1,
            121 => 1,
            124 => 1,
            129 => 1,
            131 => 1,
            136 => 1,
            138 => 1,
        ];
    }

    /**
     * @return array
     */
    protected function getWarningList() : array
    {
        return [];
    }
}
