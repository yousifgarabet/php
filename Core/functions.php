<?php

use Core\Responce;


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}


function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function authorize($condition)
{
    if ($condition) {
        abort(Responce::FORBIDDEN);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function views($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}
