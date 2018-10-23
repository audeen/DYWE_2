<?php

//////////////////////////////////////////////////
//  Übung 02-03  - uebung003_html.php           //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : while-Schleife               //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 20.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////



    echo "<table  style='border:1px solid black'>";      
            echo "<td>";                    
                $z1=1;
                $erg1=1;
                $erg2=1;

                    while ($z1<=10)
                        {
                            $erg2= $erg1*$z1;
                            echo "Durchlauf&nbsp;".$z1."&nbsp;wird multipliziert mit&nbsp;".$erg1."&nbsp;und hat das Ergebnis&nbsp;".$erg2."<br>";
                            $erg1 = $z1*$erg1;        
                            $z1++; 
                        }                                                   
            echo "</td>";                                       
    echo "</table>";
?>