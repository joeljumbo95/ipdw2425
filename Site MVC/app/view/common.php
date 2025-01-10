<?php

function html_head($menu_a, $user_id="",$user_role="",$background_color='#ffffff', $font_family='Arial')
{
    $debug = false;
	ob_start();
	?>
    <html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>FOLLYFOOT: Foot Satire</title>
        <link rel="stylesheet" href="../../Site MVC/public/css/internal/styles.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            body,
            .container,
            .navbar,
            td,
            #footerTable,
            footer{
                background-color: <?php echo $background_color;?>;
                font-family:<?php echo $font_family; ?>;
            }

        </style>
    </head>

    <body>
    <header>
        <div class="header-container">
            <!-- Boutons à gauche -->
            <div class ="left-section">
                <?php echo form_background();?>
            </div>
            <!-- Logo ballon au centre -->

            <img src="../../Site MVC/public/media/Images/logofollyfoot.png" height="100" alt="Follyfoot logo"/>

            <div class ="user-section">
                <span>Bienvenue <?= $user_id ?> <?= $user_role ?></span>
                <?php html_logout_button(); ?>
            </div>

        </div>
    </header>
    <main>
      <div class="container">
        <nav class="navbar">
            <?php

            foreach ($menu_a as $menu) {
                // Vérifiez si l'entrée contient une clé et une valeur
                foreach ($menu as $text => $link) {
                    if (is_array($link)) {
                        // Si le lien est un tableau (exemple : "A propos"), vous pouvez gérer les sous-liens ici
                        foreach ($link as $subText => $subLink) {
                            echo <<<HTML
                <a class="navbar-lien" href="?page=$subLink">$subText</a> |
HTML;
                        }
                    } else {
                        // Génère les liens standards
                        echo <<<HTML
            <a class="navbar-lien" href="?page=$link">$text</a> |
HTML;
                    }
                }
            }
            ?>
        </nav>
    </div>
    <?php

	if($debug)
	{
        var_dump($_COOKIE);
		var_dump($_SESSION);
        var_dump($_GET);
        var_dump($_POST);
	}
	return ob_get_clean();
}

function html_foot()
{
	ob_start();
	?>
    </main>
    <footer>
        <hr />
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <table id="footerTable">
                        <tr>
                            <th>Les Selections du site </th>
                        </tr>
                        <tr>
                            <td>
                                Opinions
                            </td>
                            <td>
                                Planete
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Politique
                            </td>
                            <td>
                                Sante
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Societé
                            </td>
                            <td>
                                Quotidien
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Vidéos
                            </td>
                            <td>
                                Podcasts
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Cultures
                            </td>
                            <td>
                                Archives
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-4">
                    <table id="footerTable">
                        <tr>
                            <th>Les Services </th>
                        </tr>
                        <tr>
                            <td>
                                Bourse
                            </td>
                            <td>
                                Gocar
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Trafic
                            </td>
                            <td>
                                Meteo
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Guide Achat
                            </td>
                            <td>
                                Comparateur
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Photobook
                            </td>
                            <td>
                                Cookies
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Petites annonces
                            </td>
                            <td>
                                RSS
                            </td>
                        </tr>
                    </table>


                </div>
                <div class="col-sm-4">
                    <table id="footerTable">
                        <tr>
                            <th>Groupe Follyfoot</th>
                        </tr>
                        <tr>
                            <td>
                                Folly
                            </td>
                            <td>
                                Foot
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Rendez-vous
                            </td>
                            <td>
                                Metro
                            </td>
                        </tr>
                        <tr>
                            <td>
                                App Optimisation
                            </td>
                            <td>
                                Videonews
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Grenz Folly
                            </td>
                            <td>
                                Sillon Belge
                            </td>
                        </tr>
                        <tr>
                            <td>
                                References
                            </td>
                            <td>
                                About
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </footer>
	</body>
	</html>
	<?php
	return ob_get_clean();
}

function form_background() {
    $out = <<<HTML
    <div class="bg-buttons">
        <form method="POST" action="" style="display: flex; gap: 5px;">
            <button type="submit" name="color" value="#ffffff">White</button>
            <button type="submit" name="color" value="#d3d3d3">Grey</button>
            <button type="submit" name="color" value="#a9a9a9">Black</button>
        </form>
    </div>
HTML;
    return $out;
}
