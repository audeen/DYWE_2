<?php

//////////////////////////////////////////////////
//  Übung 05 - 03 - index.php                   //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : arrays/externes php          //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 11.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////


include("config/uebung03_texte.php");

echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style03.css\">";
echo "</head>";

echo "<body>";

echo "<form action=\"\" method=\"POST\">";

    echo "<button name=\"d\" type=\"submit\" value=\"d\">";
        echo "deutsch";
    echo "</button>";

    echo "<button name=\"e\" type=\"submit\" value=\"e\">";
        echo "englisch";
    echo "</button>";
echo "</form>";

if (isset ($_POST['d'])) echo "<h1>".$lang[0][0]."<br>".$lang[0][1]."</h1>";
if (isset ($_POST['e'])) echo "<h1>".$lang[1][0]."<br>".$lang[1][1]."</h1>";

echo "</body>";
echo "</html>";
?>