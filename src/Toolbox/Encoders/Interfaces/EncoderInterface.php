<?php

namespace Redbox\Toolbox\Encoders\Interfaces;

interface EncoderInterface
{
    public function __construct(string $value = '');

    public function encode(string $str = ''): string;

    public function decode(string $str = ''): string;
}