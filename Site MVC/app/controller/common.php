<?php

function ctrl_head()
{
    //@session_start();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Gérer le changement de couleur de fond
    if (isset($_POST['color'])) {
        $_SESSION['background_color'] = $_POST['color'];
        switch ($_POST['color']) {
            case '#ffffff':
                $_SESSION['font_family'] = 'Arial';
                break;
            case '#d3d3d3':
                $_SESSION['font_family'] = 'Georgia';
                break;
            case '#a9a9a9':
                $_SESSION['font_family'] = 'Verdana';
                break;
        }

    }

    $background_color = $_SESSION['background_color'] ?? '#ffffff';

    $font_family = $_SESSION['font_family'] ?? 'Arial';

    // information de l'utilisateur
    $user_id = $_SESSION['id'] ?? '';
    $user_role = $_SESSION['role'] ?? '';

    // get menu array from csv
    $menu_a = get_menu_json();


    return html_head($menu_a, $user_id,$user_role, $background_color, $font_family);
}