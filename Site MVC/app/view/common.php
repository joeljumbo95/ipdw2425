<?php

function html_head($menu_a, $user_id="",$user_role="")
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
    </head>

    <body>
    <header>
        <div class="container">
            <img src="../../Site MVC/public/media/Images/logofollyfoot.png" height="100" alt="Folyfoot logo"/>
            <button id="bouton-identifier">Identifier</button>
            <?php
             html_logout_button();
            ?>

            <a id="inscrire" href="#"><i class="fas fa-lock"> S'inscrire</i></a>
        </div>

    </header>
    <main>
      <div class="container">
        <nav class="navbar">
            <?php
            foreach ($menu_a as $menu)
            {
                $text =$menu[0];
                $link =$menu[1];

                echo <<<HTML
                <a class="navbar-lien" href ="?page=$link" >$text</a> |
HTML;

            }
            ?>
            <p class="navbar-lien">Bienvenue  <?=$user_id?> (<?=$user_role?>)</p>
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

