<?php

//////////////////////////////////////////////////
//  Übung 03-05  - uebung_5_g.php               //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : get // Spritpreisbremse      //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 25.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

$diesel=1.5;
$super=1.65;
$e10=1.6;
$vol=$_POST['emenge'];

$kfz=$_POST['etyp'];
switch ($kfz)
    {
        case "D":
            {
                echo "1 Liter Dieselkraftstoff kostet&nbsp;".$diesel."&nbsp;Euro,<br>die Tankmenge beträgt ".$vol." Liter,
                die Kosten der Tankfüllung betragen&nbsp;".$diesel*$vol."&nbsp;Euro.";  
                break;
            }
        case "S":
            {
                echo "1 Liter Superkraftstoff kostet&nbsp;".$super."&nbsp;Euro,<br>die Tankmenge beträgt ".$vol." Liter,
                      die Kosten der Tankfüllung betragen&nbsp;".$super*$vol."&nbsp;Euro.";
                break;            
            }
        case "E10":
            {
                echo "1 Liter E10-Kraftstoff kostet&nbsp;".$e10."&nbsp;Euro,<br>die Tankmenge beträgt ".$vol." Liter,
                      die Kosten der Tankfüllung betragen&nbsp;".$e10*$vol."&nbsp;Euro.";
                break;      
            }
    }
