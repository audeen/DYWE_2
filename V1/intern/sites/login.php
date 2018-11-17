<?php

//////////////////////////////////////////////////
//  Übung V1    - /intern/sites/login.php       //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : Login ins Backend            //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 15.11.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////
session_start();
header('content-type:text/html; charset=ISO-8859-1');

$host="localhost"; //Hostname
$user="root"; //Benutzername
$pass=""; //Passwort
$dbase="dywe2"; //Datenbankname
$db_link = mysqli_connect($host, $user, $pass);
mysqli_select_db($db_link, $dbase); 



echo "<html>";
echo "<head>";
    echo "<title>Login</title>";
    echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"../css/style.css\" />";
     
echo "</head>";
echo "<body>";
    echo "<header></header>";
    echo "<div class=\"site\">";
        echo "<h3>Interner Bereich - Anmeldung erfoderlich</h3>";
        echo "<br>";
        echo "<form action=\"liste.php\">";
        echo "<table>";
            echo "<tr>";
                echo "<td>Anmeldename:</td>";
                echo "<td>";
                    echo "<input name=\"ename\" type=\"text\">";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Passwort:</td>";
                echo "<td>";
                   echo "<input name=\"epass\" type=\"password\">";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td></td>";
                echo "<td>";
                    echo "<input type=\"submit\" value=\"Anmelden\"></input>";
                echo "</td>";
            echo "</tr>";
        echo "</table>";
        echo "</form>";
    echo "</div>";
echo "</body>";
echo "</html>";

?>