<?php

//////////////////////////////////////////////////
//  Übung 006    - Aufgabe_02.php               //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : Funktionen                   //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 29.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

function ascii($anzahl) {
    for ($i=97; $i<=$anzahl; $i++){

       echo chr($i)." ";
    }
}

ascii(122);


?>


