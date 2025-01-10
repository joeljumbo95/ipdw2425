<?php

/**
 * Donne un article complet
 * @return string
 */

function main_article()
{
    $art_id = $_GET['art_id'];

    //récupêration des données de l'article
    $article_a = get_article_a($art_id);


    // donne la page HTML

    return join( "\n", [
        ctrl_head(),
        html_article_main($article_a),
        html_foot(),
    ]);

}