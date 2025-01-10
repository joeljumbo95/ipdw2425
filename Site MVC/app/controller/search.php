<?php


function main_search()
{
    //reprends tous les articles basés sur le mot clé de recherche
    $kw = $_POST['search_kw'] ?? '';
    $limit = $_POST['search_limit'] ?? DEFAULT_SEARCH_LIMIT;
    $all_article_a = get_all_article_a($kw, $limit);


    //Donne le code html

    return join("\n", [
        ctrl_head(),
        html_search_form($kw, $limit),
        html_all_articles_main($all_article_a),
        html_foot(),
    ]);
}
