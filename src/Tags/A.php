<?php

namespace KevinMartiniano\Solid\Tags;

class A
{
    public function render(string $href, string $ancor)
    {
        return "<a href=\"{$href}\">{$ancor}</a>";
    }
}