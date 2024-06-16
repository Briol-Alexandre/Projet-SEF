<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function base_path(string $path): string
{
    return get_template_directory() . '/' . $path;
}
function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}


