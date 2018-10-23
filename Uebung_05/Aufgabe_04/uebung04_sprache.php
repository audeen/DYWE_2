<?php

//////////////////////////////////////////////////
//  Übung 05 - 04    - uebung04_sprache.php     //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : arrays/multipage             //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 12.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

$browsersprache = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
include("config/uebung04_texte.php");

echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" 
            type=\"text/css\" 
            href=\"config/style04.css\">";
echo "</head>";

echo "<body>";

// Abfrage Browsersprache für Erstaufruf

if(!isset($_POST['d']) && !isset($_POST['e']) && $browsersprache == "de")

    {
        echo "<h1>".$lang[0][0]."</h1>";
    }

elseif (isset ($_POST['d']))
    {
        echo "<h1>".$lang[0][0]."</h1>";
    }

elseif (isset ($_POST['e'])) 
    {
        echo "<h1>".$lang[1][0]."</h1>"; 
    };

// buttons


echo "<form action=\"\" method=\"POST\">";

    echo "<input class=\"ger\" type=\"submit\" name=\"d\" value=\"\">";
    echo "</input>";

    echo "<input class=\"eng\" type=\"submit\" name=\"e\" value=\"\">";
    echo "</input>";

// Abfrage Button

if (isset ($_POST['d'])) 

//for-loop für Arrayausgabe

    {
        echo "<h2>";
        for ($x=2;$x<=4; $x++ )
        {
            echo $lang[0][$x]."<br>";
        }
        echo "</h2>"; 
    }

elseif (isset ($_POST['e'])) 
    {
        echo "<h2>";
        for ($x=2;$x<=4; $x++ )
        {
            echo $lang[1][$x]."<br>";
        }
        echo "</h2>"; 
    }

else
{
    if ($browsersprache=="de")
    {
        echo "<h2>";
        for ($x=2;$x<=4; $x++ )
        {
            echo $lang[0][$x]."<br>";
        }
        echo "</h2>"; 
    }
};
echo "</form>";

//Abfrage Sprache für Button Seite 2

echo "<form action=\"config/uebung04_seite2.php\" method=\"POST\">";

if (isset ($_POST['d'])) 
    {
    echo "<button type=\"submit\" name=\"d\">";
        echo $lang[0][13];
    echo "</button>";
    }

elseif (isset ($_POST['e'])) 
{
    echo "<button type=\"submit\" name=\"e\">";
        echo $lang[1][13];
    echo "</button>";
    }

// Alternative bei keiner Auswahl

elseif ($browsersprache=="de")
    {
        echo "<button type=\"submit\" name=\"d\">";
            echo $lang[0][13];
        echo "</button>";
    };

echo "</form>";

echo "</body>";
echo "</html>";

?>