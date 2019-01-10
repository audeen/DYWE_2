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

if (!isset ($_POST['ename'])) {$_POST['ename'] = '';}
if (!isset ($_POST['epass'])) {$_POST['epass'] = '';}

$err_text = '';
$err_text2 = '';
    

if ($_POST['ename'] == '') 
    {
        $err_text .= "Namensangabe fehlt!";
    }
if ($_POST['epass'] == '') 
    {
        $err_text .= $space4;
        $err_text .= "Passwort fehlt!";
    };

if (isset ($_POST['senden'])
    {
        $sql = "SELECT * FROM users,";
        $sql = mysqli_query($db_link, $sql) OR die(mysqli_error()); 
        if (mysqli_num_rows ($sql) > 0)
            {while }
    }
if(mysqli_num_rows ($sql_array) > 0)
    {
        while ($row = mysqli_fetch_array($sql_array))
            {
                echo $row['u_name'];
                echo $row['u_pass'];
            }
    }
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
 /*            echo "<tr>";
                echo $err_text;
            echo "</tr>"; */
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
                    echo "<input name=\"senden\"type=\"submit\" value=\"Anmelden\"></input>";
                echo "</td>";
            echo "</tr>";
        echo "</table>";
        echo "</form>";
    echo "</div>";
echo "</body>";
echo "</html>";

?>