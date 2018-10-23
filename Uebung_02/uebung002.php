<?php

//////////////////////////////////////////////////
//  Übung 02-02  - uebung002.php                //
//  Fachbereich Medien FH-Kiel - 3. Semester    //
//  Beschreibung : kleines 1x1                  //
//  Ersteller    : Jannik Sievert               //
//  Stand        : 20.09.2018                   //
//  Version      : 1.0                          //
//////////////////////////////////////////////////

echo "<table  style='border:1px solid black'><td>";      
    
    for ($y=1;$y<=10;$y++)
        {
          for ($x=1;$x<=10;$x++)
            {
                 $erg1=$y*$x;  
                   if ($erg1 < 10)
                    {
                        echo $erg1."&nbsp;&nbsp;&nbsp;";  
                    }
                 else
                    {
                        echo $erg1."&nbsp;"; 
                    }  
            }
        echo "<br>";
        }
echo "</td></table>";  
?>