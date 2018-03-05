<?php
namespace Redbox\ToolBox\Encoders\Tests;

use Redbox\ToolBox\Encoders\MorseCode;
use PHPUnit\Framework\TestCase;

class MorseCodeTest extends TestCase
{
    /**
     * Test 'sos' would encode to '... --- ...';
     */
    function test_it_encodes_a_string()
    {
        $morse = new MorseCode();
        $actual = $morse->encode('sos');
        $expected = '... --- ...';
        $this->assertEquals($expected, $actual);
    }
    /**
     * Test ... --- ... would decode to 'sos'
     */
    function test_it_decodes_a_string()
    {
        $morse = new MorseCode();
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
        $morse = new MorseCode('sos');
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
        $morse = new MorseCode('... --- ...');
        $actual = $morse->decode();
        $expected = 'sos';
        $this->assertEquals($expected, $actual);
    }
}
