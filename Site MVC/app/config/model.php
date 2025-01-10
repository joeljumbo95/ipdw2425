<?php

const MACHINE = "classe38";

/**
 * DATABASE_TYPE : "SQL" pour la BD ou "JSON" pour le fichier statique dans asset
 */
const DATABASE_TYPE = "SQL";


switch (DATABASE_TYPE) {
    case "SQL":
        define(  "DATABASE_NAME", "press_2024_v03");
        break;
    case "JSON":
        define(  "DATABASE_NAME", "../asset/database/article.json");
        break;
}

/*
 * Switch pour avoir le meme code sur nimporte quelle ordinateur
 */
switch(MACHINE) {
    // ISFCE, classe 38
    case "classe38":
        define( "DATABASE_PORT", 3307 ); 	// MAriaDB
        define( "DATABASE_USERNAME", "root" );
        define( "DATABASE_PASSWORD", "" );
        break;
    case "home":
        define( "DATABASE_PORT", 3306 );  	// MySQL
        define( "DATABASE_USERNAME", "root" );
        define( "DATABASE_PASSWORD", "" );
        break;
}

const DATABASE_DSN =  "mysql:host=localhost;dbname=".DATABASE_NAME.";port=".DATABASE_PORT.";";