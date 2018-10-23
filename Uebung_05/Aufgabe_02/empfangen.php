<?php

//////////////////////////////////////////////////
//  Übung 005    - Aufgabe_02 - empfangen.php   //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : formulare/css                //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 10.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////
$sex=$_POST['esex'];
$bez=$_POST['ebezahlung'];



echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"config/style.css\">";
echo "</head>";
echo "<body>";
echo "<table>";

echo "<tbody>";

echo "<tr>";
    echo "<td   class=\"head\">";
        echo "Nachstehend die Bestelldaten - persönliche Angaben";
    echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td class=\"atxt\">";
    switch ($sex)
            {
                case "m":
                    {
                        echo "<br>";
                        echo "Sehr geehrter Herr ".$_POST['ename'].","."<br>"."<br>"."folgende Artikel wurden für Sie reserviert:";
                        echo "<br>"."<br>";
                        break;
                    }
                case "w":
                    {
                        echo "<br>";
                        echo "Sehr geehrte Frau ".$_POST['ename'].","."<br>"."<br>"."folgende Artikel wurden für Sie reserviert:";
                        echo "<br>"."<br>";
                        break;
                    }
            }
echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"aimg\">";
            if (isset ($_POST["e1"])) echo "<img src=\"images/kennedy.jpg\">";
            if (isset ($_POST["e2"])) echo "<img src=\"images/korb.jpg\">";
            if (isset ($_POST["e3"])) echo "<img src=\"images/wein.jpg\">";
            if (isset ($_POST["e4"])) echo "<img src=\"images/lincoln.jpg\">";
    echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"abez\">";
        switch ($bez)
            {
                case "NN":
                    {
                        echo "<br>";
                        echo "<p>"."Als Zahlungsmittel haben Sie per Nachnahme gewählt"."</p>";
                        echo "<br>";
                        break;
                    }
                case "VK":
                    {
                        echo "<br>";
                        echo "<p>"."Als Zahlungsmittel haben Sie Vorkasse gewählt"."</p>";
                        echo "<br>";
                        break;
                    }
                case "BAR":
                    {
                        echo "<br>";
                        echo "<p>"."Als Zahlungsmittel haben Sie Bar bei Abholung gewählt"."</p>";
                        echo "<br>";
                        break;
                    }
            }
    echo "</td>";
echo "</tr>";
echo "</body>";
echo "</html>";


    

