<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Tests\Unit;

use Hj\Connection;

/**
 * Class ConnectionTest
 * @package Tests\Unit
 *
 * @covers Hj\Connection
 */
class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Connection
     */
    private $sut;

    public function setUp()
    {
        $this->sut = new Connection();
    }

    public function testShouldHaveA389PortByDefault()
    {
        $this->assertAttributeEquals(389, 'port', $this->sut);
    }

    public function testShouldHaveAHostnameAsNullByDefault()
    {
        $this->assertAttributeEquals(null, 'hostname', $this->sut);
    }

    public function testShouldOverrideDefaultValues()
    {
        $sut = new Connection(14, 'foo');

        $this->assertSame(14, $sut->getPort());
        $this->assertSame('foo', $sut->getHostname());
    }

    /**
     * @dataProvider providePortData
     *
     * @param integer $port
     *
     * @expectedException \Hj\Exception\InvalidArgumentException
     * @expectedExceptionMessage The given value
     */
    public function testShouldThrowAnExceptionWithInvalidPort($port)
    {
        new Connection($port);
    }

    /**
     * @return array
     */
    public function providePortData()
    {
        return array(
            array('foo'),
            array(null),
            array(''),
            array(1.58),
        );
    }
}