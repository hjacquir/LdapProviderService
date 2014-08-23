<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Tests;

use Hj\Guardian;

class GuardianTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Guardian
     */
    private $sut;

    public function setUp()
    {

    }

    /**
     * @dataProvider provideInvalidIntegerData
     *
     * @param mixed $value
     */
    public function testGuardAgainstInvalidInteger($value)
    {
        Guardian::guardAgainstInvalidInteger($value);
    }

    /**
     * @return array
     */
    public function provideInvalidIntegerData()
    {
        return array(
            array(''),
            array(null),
            array('foo'),
            array(1.2),
        );
    }

}