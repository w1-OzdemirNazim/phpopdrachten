<?php
$greeting = "";
$year = date('Y');
$name = "Nazim";
$hournow = date("G");


//Hier maak ik de groet functie


if ($hournow > 5 && $hournow < 12)
{
    $greeting = "goedemorgen mensen";
}
elseif ($hournow > 11 && $hournow < 18 )
{
    $greeting = "Goedenmiddag mensen";
}
elseif ($hournow > 17 && $hournow < 24 )
{
    $greeting = "Goedenavond mensen";
}
elseif ($hournow > 0 && $hournow < 6 )
{
    $greeting = "Goedennacht mensen";
}
?>