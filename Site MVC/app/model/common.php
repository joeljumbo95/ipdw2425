<?php

function get_menu_json()
{
    $fn = '../asset/database/menu.json';
    if (!file_exists($fn)) {
        return [];
    }

    $menu_s = file_get_contents($fn);
    $menu_data = json_decode($menu_s, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Erreur lors du décodage JSON : " . json_last_error_msg();
        return [];
    }

    // Transformation du format JSON en format attendu par la vue
    $menu_formatted = [];
    foreach ($menu_data as $fr => $en) {
        // Vérifier si c'est un tableau (pour static pages)
        if (is_array($en)) {
            $menu_formatted[] = [$fr => $en[0] . "&name=" . $en[1]];
        } else {
            $menu_formatted[] = [$fr => $en];
        }
    }

    return $menu_formatted;
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