<?php
/**
 * Created by PhpStorm.
 * User: johnnymast
 * Date: 05-03-18
 * Time: 21:05
 */

namespace Redbox\ToolBox\Encoders\Interfaces;

interface EncoderInterface
{
    public function __construct(string $value = '');
    
    public function encode(string $str = ''): string;

    public function decode(string $str = ''): string;
}