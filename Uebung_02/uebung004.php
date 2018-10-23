<?php

//////////////////////////////////////////////////
//  Übung 02-04  - uebung004.php                //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : kleines 1x1 /while-schleife  //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 20.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

echo "<table border=1>";
    $x=1;
    $y=1;
    $erg1=1;

        while ($x<=10) 
            {   
                echo "<tr>";
                while ($y<=10)
                    {                                                                                       
                        $erg1=$x*$y;
                            if ($erg1<10)
                                {
                                    echo "<td style='border:1px solid black'>";
                                    echo $erg1."&nbsp;&nbsp&nbsp";
                                    echo "</td>";
                                }
                            else
                                {
                                    echo "<td style='border:1px solid black'>";
                                    echo $erg1."&nbsp";    
                                    echo "</td>";        
                                } 
                                $y++;                               
                            }                                                       
                    $x++;                                          
                echo "</tr>";  
                $y=1;
            }               
echo "</table>";   
?>