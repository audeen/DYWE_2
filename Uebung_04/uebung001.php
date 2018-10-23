<?php

//////////////////////////////////////////////////
//  Übung 004 - 001 - uebung001.php             //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : Muster-Kommentarblock        //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 02.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

echo "<form action=\"empfangen001.php\" method=\"POST\">";
    echo "Auswahl  Anrede:";
    echo "<input name=\"eanrede\" type=\"radio\" value=\"Herr\">";
    echo "Herr";
    echo "<input name=\"eanrede\" type=\"radio\" value=\"Frau\" checked>";
    echo "Frau";

    echo "<br><br>";
    
    echo "Eingabe Name:";
    echo "<input name=\"ename\" type=\"text\">";

    echo "<br><br>";

    echo "R&uuml;ckruf erw&uuml;nscht:";
    echo "<input name=\"erueckruf\" type=\"checkbox\" value=\"Rueckruf\">";

    echo "<br><br>";

    echo "Betreff:";
    echo "<select name=\"ebetreff\">";
        echo "<option>kein Betreff</option>";
        echo "<option>Einladung</option>";
        echo "<option>allg.Anfrage</option>";
        echo "<option>Absage</option>";
    echo "</select>";

    echo "<br><br>";

    echo "<input type=\"submit\">";
    echo "<input type=\"reset\">";






?>