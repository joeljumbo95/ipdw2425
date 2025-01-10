<?php

function html_favorite_main($favorites_array)
{
    ob_start();
    ?>
    <h1>Articles favoris</h1>

    <?php
    // Changed the empty check to be more robust
    if (empty($favorites_array) || count($favorites_array) === 0 || (count($favorites_array) === 1 && reset($favorites_array) == "0")) {
        ?>
        <p>Vous n'avez pas encore d'articles favoris.</p>
        <?php
    } else {
        ?>
        <section class="bottom_articles">
            <?php
            // Clean the array before using it
            $favorites_array = array_values(array_filter($favorites_array)); // This reindexes and removes empty values

            foreach ($favorites_array as $art_id) {
                if (!empty($art_id)) {
                    $article = get_article_a($art_id);

                    if ($article) {
                        $title = $article['title'];
                        ?>
                        <article class="article-with-remove">
                            <a href="?page=article&art_id=<?= $art_id ?>"><h1><?= $title ?></h1></a>
                            <form method="POST" action="index.php?page=favorite" style="display: inline;">
                                <input type="hidden" name="article_id" value="<?= $art_id ?>">
                                <button type="submit" name="fav" value="retire" class="remove-favorite">Retirer</button>
                            </form>
                        </article>
                        <?php
                    }
                }
            }
            ?>
        </section>
        <?php
    }

    return ob_get_clean();
}
?>