<?php

/**
 * build <body>
 * @param $user
 * @param $role
 */
function html_body()
{
	ob_start();
	?>
    <main>
        <div id="a">
            <div class="container">
                <div class="row">
                    <div class ="col-sm-8">
                        <section>
                            <article>
                                <h2><a href= "../Article/index.html"> Eden Hazard : Le Fiasco au Real Madrid et la Nouvelle Carrière à Burger King</a></h2>
                                <img src="../Images/hazard_burger_king.jpg" width="600" height="400">
                                <p>Eden Hazard, l'ancienne superstar de Chelsea et membre de l'équipe nationale belge, a réussi à rater complètement sa carrière au Real Madrid et à décrocher un accord lucratif avec Burger King</p>
                            </article>
                        </section>
                    </div>

                    <div id="b" class="col-sm-4">
                        <section>
                            <table>
                                <tr>
                                    <td id="meteo">
                                        Meteo <i class="fas fa-map-marker-alt"> </i> Bruxelles
                                    </td>
                                    <td id="bourse">
                                        Bourse Bel20
                                    </td>
                                </tr>
                                <tr id="resmeteo">
                                    <td id="celmeteo">
                                        <i class="fas fa-sun"></i> | 12°

                                    </td>
                                    <td id="resbourse">
                                        <i class="fas fa-arrow-down"></i> | 0,79%
                                    </td>
                                </tr>
                                <tr>
                                    <td id="fil">
                                        Le fil info
                                        <p><button class="boutonActualites">Actualités</button></p>
                                    </td>
                                    <td id="boutSports">
                                        <p><button class="boutonSports">Sports</button></p>
                                    </td>
                                </tr>

                                <tr >
                                    <td id="celheure">
                                        18:48
                                    </td>
                                    <td id="arttable">
                                        <a href="#" ><li>Le Penalty Spatial : La NASA Retrouve le Ballon d’Harry Kane en Orbite!</li></a>
                                    </td>
                                </tr>
                                <tr >
                                    <td id="celheure" >
                                        18:40
                                    </td>
                                    <td id="arttable">
                                        <a href="#" ><li>Harry Maguire, L'Éveil d’un Joueur: Adieu Fautes, Bonjour Dribbles!</li></a>
                                    </td>
                                </tr>
                                <tr >
                                    <td id="celheure">
                                        18:35
                                    </td>
                                    <td id="arttable">
                                        <a href="#" ><li>Leo Messi Remporte le Ballon d’Or 2022, Mais C'est un Poulet Rôti!</li></a>
                                    </td>
                                </tr>
                                <tr >
                                    <td id="celheure" >
                                        18:20
                                    </td>
                                    <td id="arttable">
                                        <a href="#" ><li>Manchester City Achète la Ligue des Champions… Littéralement!</li></a>
                                    </td>
                                </tr>

                            </table>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" >
                        <h3>Le Penalty Spatial : La NASA Retrouve le Ballon d’Harry Kane en Orbite!</h3>
                        <img src="../site MVC/app/kanePenalty.png" width="350" height="200">
                        <p>
                            Dans une découverte inattendue, la NASA a localisé le ballon de football d'Harry Kane en orbite terrestre basse. Surnommé le "Penalty Spatial", cet objet insolite suscite des questions sur la trajectoire étonnante du ballon et soulève des discussions passionnantes sur la relation entre le sport et l'exploration spatiale.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Leo Messi Remporte le Ballon d’Or 2023, Mais C'est un Poulet Rôti!</h3>
                        <img src="../Images/messi_chicken.jpeg" width="350" height="200">
                        <p>
                            Dans un retournement surprenant, Leo Messi s'est vu décerner le Ballon d'Or 2023, mais il s'avère que le trophée n'est autre qu'un poulet rôti. Cette situation inédite a suscité la confusion et l'émerveillement, laissant les amateurs de football se demander quel message caché se cache derrière ce choix étrange.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Manchester City Achète la Ligue des Champions… Littéralement!</h3>
                        <img src="../Images/city_contrat.jpg" width="350" height="200">
                        <P>
                            Dans une transaction d'une ampleur sans précédent, Manchester City a fait l'acquisition de la Ligue des Champions... littéralement ! En ajoutant ce trophée prestigieux à leur collection, le club anglais repousse les limites du football et soulève des questions sur le pouvoir croissant de l'argent dans le sport moderne.
                        </P>
                    </div>
                </div>
            </div>

            <p></p>
            <p></p>
            <p></p>
            <p></p>
    </main>
    <?php
	return ob_get_clean();
}

