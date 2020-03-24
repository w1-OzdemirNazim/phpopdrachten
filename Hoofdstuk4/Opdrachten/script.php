<?php
/**
 * User: Nazim Özdemir
 * Date: 22-3-2020
 * Time: 16:00
 * File: script.php
 */
?>

<?php
include "../../Includes/header.php"
?>

<?php

$courseName= 'PHP';
$teacherName = '';

switch ($courseName)
{
    case "Loopbaan & Burgerschap":
        $teacherName = 'van den Berg';
        break;
    case "PHP":
        $teacherName = 'Saebu';
        break;
    case "JavaScript":
        $teacherName = 'Evers';
        break;
    case "ASP":
        $teacherName = 'van Meer';
        break;
    case "Modeleren":
        $teacherName = 'van Bijnen';
        break;
    case "Database SQL":
        $teacherName = 'van de Wetering';
        break;
    case "Digitale vaardigheden gevorderd":
        $teacherName = 'Pielage';
        break;
    case "Computer tekenen":
        $teacherName ='van den Berg';
        break;
    case "Engels":
        $teacherName ='Giesen';
        break;
    case "rekenen":
        $teacherName ='van de Wetering';
        break;
}

echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>

<?php
include "../../Includes/footer.php"
?>



