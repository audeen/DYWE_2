<?php

//////////////////////////////////////////////////
//  Übung 03-05  - uebung_5_s.php               //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : send // Spritpreisbremse     //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 25.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////





echo "<form action=\"uebung_5_g.php\" method=\"POST\">";
    echo "Bitte Kraftstofftyp wählen:<br>";
    echo "<input name=\"etyp\" type=\"radio\" value=\"D\">";
    echo "Diesel";
    echo "<input name=\"etyp\" type=\"radio\" value=\"S\">";
    echo "Super";
    echo "<input name=\"etyp\" type=\"radio\" value=\"E10\">";
    echo "E10";

    echo "<br><br>";
    
    echo "Tankmenge:";
    echo "<input name=\"emenge\" type=\"text\">";

    echo "<br><br>";

    echo "<input type=\"submit\">";
    echo "<input type=\"reset\">";






?>