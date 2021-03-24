<?php

namespace KevinMartiniano\Solid;

class Html
{
    public function __call(string $name, array $arguments)
    {
        $class = '\KevinMartiniano\Solid\Tags\\' . ucfirst($name);

        return \call_user_func_array([new $class, 'render'], $arguments);
    }
}