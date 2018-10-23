<?php

//////////////////////////////////////////////////
//  Übung 05 - 03 - uebung03_texte.php          //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : arrays                       //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 11.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

$browsersprache = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);

$lang = array(
    array("Die gewählte Sprache ist >>> 0", "Die browsersprache ist >>> ".$browsersprache),
    array("The selected language is >>> 1", "The browser language is >>> ".$browsersprache)
);

?>