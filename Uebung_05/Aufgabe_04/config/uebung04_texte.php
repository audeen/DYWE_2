<?php

//////////////////////////////////////////////////
//  Übung 05 - 04    - uebung04_texte.php       //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : arrays/multipage             //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 12.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

$browsersprache = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
    


$lang [0][0] = "Wähle eine Sprache aus!";
$lang [0][1]= "Wochentage";
$lang [0][2]= "Zusammenfassung der Variablen:";
$lang [0][3]= "Die gewählte Sprache ist >>> 0";
$lang [0][4]= "Die browser-Sprache ist >>> ".$browsersprache;
$lang [0][5]= "Sonntag";
$lang [0][6]= "Montag";
$lang [0][7]= "Dienstag";
$lang [0][8]= "Mittwoch";
$lang [0][9]= "Donnerstag";
$lang [0][10]= "Freitag";
$lang [0][11]= "Samstag";
$lang [0][12]= "Seite 1";
$lang [0][13]= "Seite 2";
    
$lang [1][0] = "Choose a language!";
$lang [1][1]= "Weekdays";
$lang [1][2]= "Summary of variables:";
$lang [1][3]= "the selected language is >>> 1";
$lang [1][4]= "the browser language is >>> ".$browsersprache;
$lang [1][5]= "Sunday";
$lang [1][6]= "Monday";
$lang [1][7]= "Tuesday";
$lang [1][8]= "Wednesday";
$lang [1][9]= "Thursday";
$lang [1][10]= "Friday";
$lang [1][11]= "Saturay";
$lang [1][12]= "Side 1";
$lang [1][13]= "Side 2";
   

    

?>