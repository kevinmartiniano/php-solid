<?php

namespace KevinMartiniano\Solid\Tags;

class Img
{
    public function render(string $src)
    {
        return "<img src=\"{$src}\">";
    }
}