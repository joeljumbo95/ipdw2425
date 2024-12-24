<?php

function get_menu_csv()
{
    $fn = '../asset/database/menu.csv';
    $menu_s = file_get_contents($fn); // transforme tout le fichier csv en un string
///mais nous voulons 1 tableau et un sous tableau
     $menu_a = explode("\n",$menu_s);
//Creation d'un tableau
    $menu_aa = [];
    foreach($menu_a as $line)
    {
        //append dans menu_aa
        $menu_aa[]= explode("|",$line);

    }
    return $menu_aa;
}