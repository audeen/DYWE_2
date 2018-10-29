<?php

//////////////////////////////////////////////////
//  Übung 006    - Aufgabe_03_ extern.php       //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : Funktionen                   //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 29.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////


function strich() {
    for ($i=1; $i <=65; $i++) {
        echo "-";
    }
};

function ascii($anzahl) {
    for ($i=65; $i<= $anzahl; $i++) {
        echo chr($i);
    }
};
?>