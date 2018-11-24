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

include ("../../config/config.php");
echo "<link rel=\"stylesheet\"  type=\"text/css\" href=\"../../config/css/style.css\">"; 

/* if (!isset )
 */

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
        echo "<form action=\"\" method= \"POST\">";
        echo "<table>";
            echo "<tr>";
                echo "<td>Anmeldename:</td>";
                echo "<td>";
                    echo "<input name=\"user\" type=\"text\">";
                echo "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Passwort:</td>";
                echo "<td>";
                   echo "<input name=\"password\" type=\"password\">";
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