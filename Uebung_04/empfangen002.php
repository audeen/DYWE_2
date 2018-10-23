<?php

//////////////////////////////////////////////////
//  Übung 003    - empfangen002.php             //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : Muster-Kommentarblock        //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 02.10.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

    echo "Ich bin empfangen!<br><br><br>";
    echo $_POST ['eanrede']; 
    echo "<br>";
    echo $_POST ['ename'];
    echo "<br>";
    
    if (isset ($_POST ['erueckruf']))
        {
            echo "angeklickt";
        }
    else 
    {
        echo "nicht angeklickt";
    }
    echo "<br>";
    echo $_POST ['ebetreff'];


?>