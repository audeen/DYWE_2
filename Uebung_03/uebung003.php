<?php

//////////////////////////////////////////////////
//  Übung 03-03  - uebung003.php                //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : if-else-Bedingungen          //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 25.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

$var1="Diesel";
$var2="Super";

$kfz=$var2;
if ($kfz==$var1)
    {echo "Dieselmotor gefunden";}
else 
    {
        if ($kfz==$var2)
            {
                echo "Benzinmotor&nbsp;-&nbsp;".$var2."treibstoff";
            }
        else 
            {
                echo "Benzinmotor&nbsp;-&nbsp;Benzintreibstoff";
            }
    }
?>