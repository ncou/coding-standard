<?php

declare(strict_types=1);

namespace Chiron\Tests\Errors;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the ExceptionMessageUnitTest sniff.
 */
class ExceptionMessageUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    protected function getErrorList(): array
    {
        return [
            3 => 1,
        ];
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    protected function getWarningList(): array
    {
        return [];
    }
}
