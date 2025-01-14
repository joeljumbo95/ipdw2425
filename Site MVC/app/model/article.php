<?php
/**
 * @param $art_id
 * @return mixed -> assoc array avec données de l'article
 * Donne l'article sur la homepage
 *
 */
function get_article_a($art_id=1)
{
    switch (DATABASE_TYPE) {
        case "SQL":
            return get_article_a_sql($art_id);
        case "JSON":
            return get_article_a_json($art_id);
    }
}

function get_article_a_json($art_id)
{
    $fn = DATABASE_NAME;
    $art_db_s = file_get_contents($fn);
    $art_db_a = json_decode($art_db_s, true);
    foreach ($art_db_a as $art_a)
    {
        if ($art_a["id"] == $art_id) break;
    }
    return $art_a;
}

function get_article_a_sql($art_id)
{
    $q = <<<SQL
   SELECT
          ident_art AS id, 
          title_art AS title,
          hook_art AS hook, 
          content_art AS content, 
          'fk_category_art' AS category,
          date_art AS date_published,
          image_art AS image_name,
          readtime_art AS readtime
   FROM t_article 
   WHERE 
       ident_art = :ident_art
   ORDER BY ident_art DESC
SQL;

    $pdo = get_pdo();
    $stmt = $pdo->prepare($q);
    $param = ['ident_art' => $art_id];
    $stmt->execute($param);
    $result = $stmt->fetch();
    return $result;
}

function get_bottom_article_a()
{
    $art_aa = [];
    foreach ([2,3,4,5,6] as $art_id)
    {
        $art_aa[] = get_article_a($art_id);
    }
    return $art_aa;
}

/*
* Retourne tous les articles d'une DB
*/
function get_all_article_a($kw='', $limit=DEFAULT_SEARCH_LIMIT, $readtime='')
{
    switch (DATABASE_TYPE)
    {
        case "SQL":
            return get_all_article_a_sql($kw, $limit, $readtime);
        case "JSON":
            return get_all_article_a_json();
    }
}

function get_all_article_a_json()
{
    $fn = DATABASE_NAME;
    $art_db_s = file_get_contents($fn);
    $art_db_a = json_decode($art_db_s, true);
    return $art_db_a;
}

function get_all_article_a_sql($kw='', $limit=DEFAULT_SEARCH_LIMIT, $readtime='')
{
    $q = <<<SQL
   SELECT
          ident_art AS id, 
          title_art AS title,
          hook_art AS hook, 
          content_art AS content, 
          readtime_art AS readtime,
          'fk_category_art' AS category
   FROM t_article
   WHERE title_art LIKE :kw_string 
SQL;

    if ($readtime !== '') {
        $q .= " AND readtime_art <= :readtime";
    }

    $q .= " ORDER BY ident_art DESC LIMIT :limit";

    $pdo = get_pdo();
    $stmt = $pdo->prepare($q);
    $kw_string = "%$kw%";

    $stmt->bindParam(':kw_string', $kw_string);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);

    if ($readtime !== '') {
        $stmt->bindParam(':readtime', $readtime, PDO::PARAM_INT);
    }

    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}