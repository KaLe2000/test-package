<?php

declare(strict_types=1);

namespace Talovskiy\Example;

class Test {
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public static function quote($quote = null): Test
    {
        $matrix = "— Ты веришь в судьбу, Нео? \r\n";
        $matrix .= "— Нет. \r\n";
        $matrix .= "— Почему? \r\n";
        $matrix .= "— Неприятно думать, что тобой манипулируют. \r\n";
        return new self($quote ?? $matrix);
    }

    public function __toString()
    {
        return $this->text;
    }
}