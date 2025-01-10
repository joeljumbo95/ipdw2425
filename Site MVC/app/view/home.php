<?php

/**
 * build <body>
 * @param $user
 * @param $role
 */
function html_home_main($article_a, $bottom_article_a)
{
    ob_start();
    ?>
        <h1 class="home_titre">Article a la UNE</h1>
    <section class="breaking">
        <!-- Article principal -->
        <article class="main-article">
            <div class="article-image">
                <img src="<?= MEDIA_ARTICLE_PATH . $article_a['image_name'] ?>" alt="<?= $article_a['title'] ?>">
            </div>
            <a href="?page=article&art_id=<?= $article_a['id'] ?>">
                <h1><?= $article_a['title'] ?></h1>
            </a>
            <h2><?= $article_a['hook'] ?></h2>
        </article>
    </section>

    <!-- Articles du bas -->
    <section class="bottom-articles">
        <?php foreach ($bottom_article_a as $article): ?>
            <article class="bottom-article">
                <a href="?page=article&art_id=<?= $article['id'] ?>">
                    <h1><?= $article['title'] ?></h1>
                </a>
                <h2><?= $article['hook'] ?></h2>
            </article>
        <?php endforeach; ?>
    </section>
    <?php
    return ob_get_clean();
}

