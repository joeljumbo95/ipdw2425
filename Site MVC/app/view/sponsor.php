<?php

function html_sponsor_body() {
    $sponsor = get_sponsor_data();
    ob_start();
    ?>
    <style>
        .banner {
            border: rgb(25, 99, 161) 2px solid;
            border-radius: 10px;
            margin: 20px;
            padding: 20px;
            width: 50%;
            background-color: #edcaa5;
        }
    </style>
    <main>
        <div class="container">
            <div class="banner">
                <img src="<?php echo $sponsor['image']; ?>" style="float:right;" />
                <?php echo $sponsor['text']; ?>
            </div>
        </div>
    </main>
    <?php
    return ob_get_clean();
}