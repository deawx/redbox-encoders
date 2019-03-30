<?php
namespace Redbox\Toolbox\Encoders\Tests;

use Redbox\Toolbox\Encoders\Morse;
use PHPUnit\Framework\TestCase;

class MorseTest extends TestCase
{
    /**
     * Test 'sos' would encode to '... --- ...';
     */
    function test_it_encodes_a_string()
    {
        $morse = new Morse();
        $actual = $morse->encode('sos');
        $expected = '... --- ...';
        $this->assertEquals($expected, $actual);
    }
    /**
     * Test ... --- ... would decode to 'sos'
     */
    function test_it_decodes_a_string()
    {
        $morse = new Morse();
        $actual = $morse->decode('... --- ...');
        $expected = 'sos';
        $this->assertEquals($expected, $actual);
    }
    /**
     * Test that encode will work if the message is passed via
     * the constructor of the class.
     */
    function test_it_encodes_if_the_constructor_is_used()
    {
        $morse = new Morse('sos');
        $actual = $morse->encode();
        $expected = '... --- ...';
        $this->assertEquals($expected, $actual);
    }
    /**
     * Test that decode will work if the message is passed via
     * the constructor of the class.
     */
    function test_it_decodes_if_the_constructor_is_used()
    {
        $morse = new Morse('... --- ...');
        $actual = $morse->decode();
        $expected = 'sos';
        $this->assertEquals($expected, $actual);
    }
}
