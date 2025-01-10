<?php

function main_favorite()
{
    // Initialize favorites array
    $favorites_array = array();

    // Handle POST request (adding or removing favorites)
    if (isset($_POST['fav']) && isset($_POST['article_id'])) {
        $fav_art = $_POST['fav'];
        $art_id = $_POST['article_id'];

        // Get current favorites
        $favoris = isset($_COOKIE['favorite']) ? $_COOKIE['favorite'] : '';
        $favorites_array = $favoris ? explode(';', $favoris) : array();

        if ($fav_art == 'jaime') {
            // Add to favorites if not already present
            if (!in_array($art_id, $favorites_array)) {
                $favorites_array[] = $art_id;
            }
        }
        elseif ($fav_art == 'retire') {
            // Remove from favorites and reindex array
            $favorites_array = array_values(array_diff($favorites_array, array($art_id)));
        }

        // Clean the array before saving
        $favorites_array = array_values(array_filter($favorites_array));

        // Save updated favorites
        $new_favorites = implode(';', $favorites_array);
        setcookie('favorite', $new_favorites, time() + (86400 * 30), '/');
    }
    else {
        // Get current favorites from cookie
        $favoris = isset($_COOKIE['favorite']) ? $_COOKIE['favorite'] : '';
        $favorites_array = $favoris ? explode(';', $favoris) : array();
        $favorites_array = array_values(array_filter($favorites_array)); // Clean array
    }

    // Always return the page
    return join("\n", [
        ctrl_head(),
        html_favorite_main($favorites_array),
        html_foot(),
    ]);
}
?>

