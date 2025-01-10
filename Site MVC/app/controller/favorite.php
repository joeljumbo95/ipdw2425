<?php

function main_favorite()
{
    // Initialisation du array favorites
    $favorites_array = array();

    // Ajoute ou efface les favoris grace au POST
    if (isset($_POST['fav']) && isset($_POST['article_id'])) {
        $fav_art = $_POST['fav'];
        $art_id = $_POST['article_id'];

        // Récupération des favoris
        $favoris = isset($_COOKIE['favorite']) ? $_COOKIE['favorite'] : '';
        $favorites_array = $favoris ? explode(';', $favoris) : array();

        if ($fav_art == 'jaime') {
            // Ajoute le favori sil nest pas présent
            if (!in_array($art_id, $favorites_array)) {
                $favorites_array[] = $art_id;
            }
        }
        elseif ($fav_art == 'retire') {
            // Efface des favoris et réindexe le array
            $favorites_array = array_values(array_diff($favorites_array, array($art_id)));
        }

        //nettoie le array
        $favorites_array = array_values(array_filter($favorites_array));

        // Sauvegarde les nouveaux favoris
        $new_favorites = implode(';', $favorites_array);
        setcookie('favorite', $new_favorites, time() + (86400 * 30), '/');
    }
    else {
        //Recupere les favoris des cookies
        $favoris = isset($_COOKIE['favorite']) ? $_COOKIE['favorite'] : '';
        $favorites_array = $favoris ? explode(';', $favoris) : array();
        $favorites_array = array_values(array_filter($favorites_array)); // Clean array
    }

    //Retourne le HTML
    return join("\n", [
        ctrl_head(),
        html_favorite_main($favorites_array),
        html_foot(),
    ]);
}
?>

