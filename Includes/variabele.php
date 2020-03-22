<?php
$greeting = "";
$year = date('Y');
$name = "Nazim";
$hournow = date("G");


//Hier maak ik de groet functie


if ($hournow > 5 && $hournow < 12)
{
    $greeting = "goedemorgen a niffo";
}
elseif ($hournow > 11 && $hournow < 18 )
{
    $greeting = "Goedenmiddag a niffo";
}
elseif ($hournow > 17 && $hournow < 24 )
{
    $greeting = "Goedenavond a niffo";
}
elseif ($hournow > 0 && $hournow < 6 )
{
    $greeting = "Goedennacht a niffo";
}
?>