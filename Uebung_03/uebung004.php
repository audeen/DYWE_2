<?php

//////////////////////////////////////////////////
//  Übung 03-04  - uebung004.php                //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : switch-case                  //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 25.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

$diesel=1.5;
$super=1.65;
$e10=1.6;
$vol=20;

$kfz="e10";

switch ($kfz)
    {
        case "diesel":
            {
                echo "1 Liter Dieselkraftstoff kostet&nbsp;".$diesel."&nbsp;Euro,<br>die Tankemenge beträgt 20 Liter,
                      die Kosten der Tankfüllung betragen&nbsp;".$diesel*$vol."&nbsp;Euro.";  
                break;
            }
        case "super":
            {
                echo "1 Liter Superkraftstoff kostet&nbsp;".$super."&nbsp;Euro,<br>die Tankemenge beträgt 20 Liter,
                      die Kosten der Tankfüllung betragen&nbsp;".$super*$vol."&nbsp;Euro.";  
                break;    
            }
        case "e10":
            {
                echo "1 Liter E10-Kraftstoff kostet&nbsp;".$e10."&nbsp;Euro,<br>die Tankemenge beträgt 20 Liter,
                      die Kosten der Tankfüllung betragen&nbsp;".$e10*$vol."&nbsp;Euro.";  
                break;
            }    
        default:
            {
                echo "Falsches KFZ";
            }    
            

            

    }


?>