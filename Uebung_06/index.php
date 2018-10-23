<?php

//////////////////////////////////////////////////
//  Übung 006s    - index.php                     //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : session                      //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 17.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

session_start();
include("./texte/uebung_06_texte.php");
$browsersprache = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);

// ERSTAUFRUF - Kontrast

if(!isset ($_SESSION['css']))
{

// Standard

    $_SESSION['css'] = 0;
    echo "<link rel=\"stylesheet\" 
            type=\"text/css\"
            href=\"./config/".$_SESSION['css'].".css\">";
}
else
{

// Ansonsten Übernahme - Einstellung

    $_SESSION['css'] = $_SESSION['css'];
    echo "<link rel=\"stylesheet\" 
            type=\"text/css\"
            href=\"./config/".$_SESSION['css'].".css\">";
}


// Style-Änderung auf der Seite

if(isset ($_POST['css']))
{
    $_SESSION['css'] = $_POST['css'];
    echo "<link rel=\"stylesheet\" 
            type=\"text/css\"
            href=\"./config/".$_SESSION['css'].".css\">";
}

// ERSTAUFRUF - SPRACHE

if(!isset ($_SESSION['language']) && $browsersprache= de)
{
    $_SESSION['language'] = 0;
}
// Übernahme - Einstellung
else
{
    $_SESSION['language'] = $_SESSION['language'];
}

// Sprach-Änderung auf Seite

if(isset ($_POST['language']))
{
    $_SESSION['language'] = $_POST['language'];
}


// Div für Style/Sprach-Switch

echo "<div class=\"buttons\">";
    echo "<form action=\"#\" method=\"POST\">";
        echo $lang[$_SESSION['language']][0];echo "<br>";
        echo "<button type=\"submit\" name=\"css\" value=\"0\"><img src=\"./images/0.jpg\"></img></button>";echo "<br>";
        echo "<button type=\"submit\" name=\"css\" value=\"1\"><img src=\"./images/1.png\"></button>";echo "<br>";
        echo $lang[$_SESSION['language']][1];echo "<br>";
        echo "<button type=\"submit\" name=\"language\" value=\"0\"><img src=\"./images/deut.jpg\"></button>";echo "<br>";
        echo "<button type=\"submit\" name=\"language\" value=\"1\"><img src=\"./images/usa.jpg\"></button>";echo "<br>";
    echo "</form>";
echo "</div>";

// Umschließender Div

echo "<div class=\"main\">";

echo "<div class=\"header\">";
    echo "<h2>".$lang[$_SESSION['language']][2]."</h2>";
echo "</div>";


echo "<div class=\"navbar\">";
    echo $lang[$_SESSION['language']][5];echo "<br>"; echo "<br>";

    echo "<a href=\"./index.php\">".$lang[$_SESSION['language']][6]."</a>"; echo "<br>";
    echo "<a href=\"./seiten/zwei.php\">".$lang[$_SESSION['language']][7]."</a>"; echo "<br>";
    echo "<a href=\"./seiten/drei.php\">".$lang[$_SESSION['language']][8]."</a>";
echo "</div>";

echo "<div class=\"content\">";

    echo $lang[$_SESSION['language']][9];echo "<br>";echo "<br>";
    echo $lang[$_SESSION['language']][10];echo "<br>";
    echo $lang[$_SESSION['language']][11];echo "<br>";
    echo $lang[$_SESSION['language']][12];echo "<br>";
    
echo "</div>";


echo "<div class=\"footer\">";
    echo "<a href=\"https://www.fh-kiel.de/\">Fachhochschule Kiel</a> - 
          <a href=\"https://www.fh-kiel.de/index.php?id=39\">Fachbereich Medien</a> -
          <a href=\"https://www.fh-kiel.de/index.php?id=4186&L=0ind%20...%2Findex.php%3Fid%3D\">Studiengang: MMP (Bachelor)";
echo "</div>";

echo "</div>";






?>