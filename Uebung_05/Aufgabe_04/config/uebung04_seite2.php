<?php

//////////////////////////////////////////////////
//  Übung 05 - 04    - uebung04_seite2.php      //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : arrays/multipage             //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 12.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

include("uebung04_texte.php");

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style04.css\">";

if (isset ($_POST['d'])) 
    {
        echo "<h1>".$lang[0][1]."</h1>";
        
        echo "<h2>";
        
        for ($x=5;$x<=11; $x++ )
        {
            echo $lang[0][$x]."<br>";
        }
        echo "</h2>";
    } 

if (isset ($_POST['e'])) 
{
    echo "<h1>".$lang[1][1]."</h1>";

    echo "<h2>";

    for ($x=5;$x<=11; $x++ )
        {
            echo $lang[1][$x]."<br>";
        }
    echo "</h2>"; 
};


echo "<form action=\"../uebung04_sprache.php\" method=\"POST\">";


if (isset ($_POST['d'])) 
    {
    echo "<button type=\"submit\" name=\"d\">";
        echo $lang[0][12];
    echo "</button>";
    }

elseif (isset ($_POST['e'])) 
{
    echo "<button type=\"submit\" name=\"e\">";
        echo $lang[1][12];
    echo "</button>";
};


?>