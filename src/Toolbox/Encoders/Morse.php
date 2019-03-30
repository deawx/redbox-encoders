<?php

namespace Redbox\Toolbox\Encoders;

use Redbox\Toolbox\Encoders\Interfaces\EncoderInterface;

class Morse implements EncoderInterface
{
    /**
     * The translation table we use to encode or
     * decode messages.
     *
     * @var array
     */
    private $translation = [
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
        'a' => '.-',
        'b' => '-...',
        'c' => '-.-.',
        'd' => '-..',
        'e' => '.',
        'f' => '..-.',
        'g' => '--.',
        'h' => '....',
        'i' => '..',
        'j' => '.---',
        'k' => '-.-',
        'l' => '.-..',
        'm' => '--',
        'n' => '-.',
        'o' => '---',
        'p' => '.--.',
        'q' => '--.-',
        'r' => '.-.',
        's' => '...',
        't' => '-',
        'u' => '..-',
        'v' => '...-',
        'w' => '.--',
        'x' => '-..-',
        'y' => '-.--',
        'z' => '--..',
        '.' => '.-.-.-',
        ',' => '--..--',
        '?' => '..--..',
        '!' => '-.-.--',
        '-' => '-....-',
        '/' => '-..-.',
        '@' => '.--.-.',
        '(' => '-.--.',
        ')' => '-.--.-',
        ' ' => '/',
    ];

    /**
     * The value the class constructed with.
     *
     * @var string
     */
    private $value = '';

    /**
     * Morsecode constructor.
     *
     * @param string $value
     */
    public function __construct(string $value = '')
    {
        $this->value = $value;
    }

    /**
     * Encode a given string into morsecode.
     *
     * @param string $str
     * @return string
     */
    public function encode(string $str = ''): string
    {
        $result = '';

        if (empty($str) === true) {
            return $this->encode($this->value);
        }
        foreach (str_split($str) as $char) {
            if (isset($this->translation[$char])) {
                $result .= " ".$this->translation[$char];
            }
        }

        return trim($result);
    }

    /**
     * Decode a given morsecode string into something
     * readable for humans.
     *
     * @param string $str
     * @return string
     */
    public function decode(string $str = ''): string
    {
        $result = '';

        if (empty($str) === true) {
            return $this->decode($this->value);
        }
        $characters = array_flip($this->translation);
        foreach (explode(' ', $str) as $character) {
            if (isset($characters[$character])) {
                $result .= $characters[$character];
            }
        }

        return $result;
    }
}