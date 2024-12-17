<?php

function main_home():string
{
    $menu_a = get_menu_csv();
	return join( "\n", [
		html_head( $menu_a),
        html_body(),
		html_foot(),
	]);

}

