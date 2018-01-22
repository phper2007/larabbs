<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 2018/1/15
 * Time: 15:47
 */


function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));

    return str_limit($excerpt, $length);
}