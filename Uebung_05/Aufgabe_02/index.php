<?php

//////////////////////////////////////////////////
//  Übung 005    - Aufgabe_02 - index.php       //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : formulare/css                //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 10.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////


echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"config/style.css\">";
echo "</head>";

echo "<body>";
echo "<form action=\"empfangen.php\" method=\"POST\">";

echo "<table>";

echo "<tbody>";

echo "<tr>";
    echo "<td   class=\"head\" colspan=4>";
        echo "Wählen Sie Ihre Artikel aus!";
    echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"img1\">";
        echo "<img src=\"images/kennedy.jpg\">";
        echo "</td>";
    echo "<td class=\"img2\">";
        echo "<img src=\"images/korb.jpg\">";
    echo "</td>";
    echo "<td class=\"img1\">";
        echo "<img src=\"images/wein.jpg\">";
    echo "</td>";
    echo "<td class=\"img2\">";
        echo "<img src=\"images/lincoln.jpg\">";
    echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"img1\">";
        echo "Kennedy-Portrait"."<br>"."bestellen?";
        echo "<input name=\"e1\" type=\"checkbox\" value=\"kennedy\">";
    echo "</td>";

    echo "<td class=\"img2\">";
        echo "Präsentkorb"."<br>"."bestellen?";
        echo "<input name=\"e2\" type=\"checkbox\" value=\"korb\">";
    echo "</td>";
    
    echo "<td class=\"img1\">";
        echo "Wein"."<br>"."bestellen?";
        echo "<input name=\"e3\" type=\"checkbox\" value=\"wein\">";
    echo "</td>";
    
    echo "<td class=\"img2\">";
        echo "Lincoln-Portrait"."<br>"."bestellen?";
        echo "<input name=\"e4\" type=\"checkbox\" value=\"lincoln\">";
    echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"right\" colspan=\"2\">";
        echo "Anrede:";
    echo "</td>";
    echo "<td class=\"left\" colspan=\"2\">";
        echo "<input name=\"esex\" type=\"radio\" value=\"m\">";
        echo "Herr";
        echo "<input name=\"esex\" type=\"radio\" value=\"w\" checked>";
        echo "Frau";
    echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"right\" colspan=\"2\">";
        echo "Name";
    echo "</td>";
    echo "<td class=\"left\" colspan=\"2\">";
        echo "<input name=\"ename\" type=\"text\">";
    echo "</td>";
echo "</tr>";

echo "<tr>";
    echo "<td class=\"right\" colspan=\"2\">";
        echo "Bezahlart:";
    echo "</td>";

        echo "<td class=\"left\" colspan=\"2\">";
        echo "<select size=\"3\" name=\"ebezahlung\">";
            echo "<option value=\"NN\">";
                echo "per Nachnahme";
            echo "</option>";

            echo "<option value=\"VK\">";
                echo "Vorkasse";
            echo "</option>";

            echo "<option value=\"BAR\">";
                echo "Bar bei Abholung";
            echo "</option>";
        echo "</select>";
echo "</tr>";

echo "<tr>";
    echo "<td  class=\"foot\" colspan=\"2\">";
        echo "<input type=\"submit\">";
    echo "</td>";
    
    echo "<td  class=\"foot\" colspan=\"2\">";
        echo "<input type=\"reset\">";
    echo "</td>";
echo "</tr>";

echo "</tbody>";
echo "</table>";

echo "</form>";
echo "</body>";
echo "</html>";



?>