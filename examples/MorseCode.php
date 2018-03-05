<?php
require 'autoload.php';

use Redbox\ToolBox\Encoders\MorseCode;

/**
 * This example will show you how can can encode or decode morsecode
 * messages.
 */

/**
 * Example Encoding a string
 */
$str = 'sos';
$instance = new MorseCode($str);
echo "Encode: ".$str.' translate to '.$instance->encode()."\n";

/**
 * Example Decoding a string
 */
$str = '.... . .-.. .-.. --- / .-- --- .-. .-.. -..';
$instance = new MorseCode($str);
echo "Decode: ".$str.' translate to '.$instance->decode();
