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

/*
 * Fonction returne un objet pdo et le crée si il n'existe pas
 */

function get_pdo()
{
    static $pdo; // Variable garde sa valeur meme apres la fonction

    if(empty($pdo))
    {
        $pdo = new PDO (DATABASE_DSN,DATABASE_USERNAME,DATABASE_PASSWORD);
        $pdo->query("SET NAMES UTF8");
    }
    return $pdo;
}