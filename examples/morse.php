<?php
require 'autoload.php';

use Redbox\Toolbox\Encoders\Morse;

/**
 * This example will show you how can can encode or decode morsecode
 * messages.
 */

/**
 * Example Encoding a string
 */
$str = 'sos';
$instance = new Morse($str);
echo "Encode: ".$str.' translate to '.$instance->encode()."\n";

/**
 * Example Decoding a string
 */
$str = '.... . .-.. .-.. --- / .-- --- .-. .-.. -..';
$instance = new Morse($str);
echo "Decode: ".$str.' translate to '.$instance->decode();
