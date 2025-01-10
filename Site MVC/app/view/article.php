<?php

function html_article_main($article_a)
{
    $title = $article_a['title'];
    $hook = $article_a['hook'];
    $art_id = $article_a['id'];
    $contents = $article_a['content'];
    $date = $article_a['date_published'];
    $readtime = $article_a['readtime'];
    $image_path = MEDIA_ARTICLE_PATH.$article_a['image_name'];

    ob_start();
    ?>
    <section class="article">
        <article>
            <h1><?=$title?></h1>
            <h2><?=$hook?></h2>
            <div class="media_article"><img src=<?php echo $image_path;?> alt=<?php echo $title;?>></div>
            <div class="date"><?=$date?></div>
            <div class="readtime"><?=$readtime?></div>
            <div><?=$contents?></div>
            <div class="bouton_jaime">
                <form method="POST" action="index.php?page=favorite" onsubmit="console.log('Form submitted')">
                    <input type="hidden" name="article_id" value="<?= $art_id; ?>">
                    <button type="submit" name="fav" value="jaime">J'aime cet article</button>
                </form>
            </div>
        </article>
    </section>

    <?php
    return ob_get_clean();
}

function html_all_articles_main($article_aa)
{

    ob_start();
    ?>
    <section class="bottom_articles">
        <?php
        foreach ($article_aa as $art_a)
        {
            $title = $art_a['title'];
            $art_id = $art_a['id'];

            echo <<<HTML
            <article>
            <a href="?page=article&art_id=$art_id"><h1>$title</h1></a>
            </article>

            HTML;


        }
        ?>

    </section>
    <?php
    return ob_get_clean();

}