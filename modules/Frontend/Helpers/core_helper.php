<?php

function hello(string $path)
{
    $path = explode("/", $path);
    // return view("Modules\Frontend\Views\")
    return $path;
}
