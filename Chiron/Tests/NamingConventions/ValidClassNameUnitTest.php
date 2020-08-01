<?php

declare(strict_types=1);

namespace Chiron\Tests\NamingConventions;

use PHP_CodeSniffer\Exceptions\RuntimeException;
use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the ValidClassNameUnitTest sniff.
 *
 * A sniff unit test checks a .inc file for expected violations of a single
 * coding standard. Expected errors and warnings are stored in this class.
 */
class ValidClassNameUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList(): array
    {
        return array(
            3 => 1,
            7 => 1,
            14 => 1,
            18 => 1,
        );
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList(): array
    {
        return array();
    }
}
