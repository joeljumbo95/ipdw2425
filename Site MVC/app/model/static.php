<?php

function get_static_content($name)
{
    try
    {
        $fn = "../asset/static_content/$name.html";
        $html_s= file_get_contents($fn);
        return $html_s;

    }
    catch ( Exception $e)
    {
        echo "Problem while reading file login.csv : " . $e ->getMessage();
        return array(false, null, null);
    }
}