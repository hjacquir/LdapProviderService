<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Tests\Unit;

use Hj\Guardian;

/**
 * Class GuardianTest
 * @package Tests\Unit
 *
 * @covers Hj\Guardian
 */
class GuardianTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideInvalidIntegerData
     *
     * @param mixed $value
     *
     * @expectedException \Hj\Exception\InvalidArgumentException
     * @expectedExceptionMessage The given value must be an integer
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
            array(array()),
            array(new \stdClass()),
        );
    }
}