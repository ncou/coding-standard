<?php

declare(strict_types=1);

namespace Chiron\Tests\Classes;

use Chiron\Tests\AbstractSniffUnitTest;

/**
 * Unit test class for the PropertyDeclaration sniff.
 */
class PropertyDeclarationUnitTest extends AbstractSniffUnitTest
{
    /**
     * @return array
     */
    protected function getErrorList(): array
    {
        return [
            9  => 1,
            43 => 1,
            54 => 1,
            61 => 1,
        ];
    }

    /**
     * @return array
     */
    protected function getWarningList(): array
    {
        return [];
    }
}
