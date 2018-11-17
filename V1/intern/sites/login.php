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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form
    $myusername = mysqli_real_escape_string($db,$_POST['user']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

    $sql = "SELECT u_id FROM user WHERE user = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: liste.php");
    }
    else {
        $error = "Eingabe falsch";
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