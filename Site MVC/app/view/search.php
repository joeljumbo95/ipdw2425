<?php

function html_search_form($kw='', $lim=DEFAULT_SEARCH_LIMIT, $rt='')
{
    return <<< HTML
        <form class="recherche" method="post">
        <label> Introduisez votre mot clé</label>
        <input name ="search_kw" type="text" value="$kw">
        <label>Nombre de resultats</label>
        <input name ="search_limit" type="text" value="$lim">
        <label>Temps de lecture maximum (minutes)</label>
        <input name="rt" type="number" min="1" value="$rt">
        <button name="b_search">rechercher</button>
</form>
HTML;

}