<?php

function main_press ()
{
    //reprends tous les articles
    $all_article_a = get_all_article_a();


    //Donne le code html

    return join( "\n", [
        ctrl_head(),
        html_all_articles_main($all_article_a),
        html_foot(),
    ]);
}