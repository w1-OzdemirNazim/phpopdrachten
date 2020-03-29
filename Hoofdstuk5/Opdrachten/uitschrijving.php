<?php
/**
 * User: Nazim Özdemir
 * Date: 29-3-2020
 * Time: 15:00
 * File: uitschrijving.php
 */
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">

</head>
<body>
<h2>Uitwerking van <a href="../../index.php"> PHP-opdrachten</a></h2>
<div class="box">

    <h1>Uitschrijving KW1C</h1>
    <hr>
    <table>
        <tr>
            <th>Voor en achternaam</th>
            <td><?php echo $_GET["Voor-Achternaam"]; ?></td>
        </tr>
        <tr>
            <th>Studentennummer</th>
            <td><?php echo $_GET["Studentennummer"]; ?></td>
        </tr>
        <tr>
            <th>Datum van uitschrijving</th>
            <td><?php echo $_GET["DaumUitschrijving"]; ?></td>
        </tr>
        <tr>
            <th>Reden van uitschrijving</th>
            <td><?php echo $_GET["Reden"]; ?></td>
        </tr>
        <tr>
            <th>Leerjaar</th>
            <td><?php echo $_GET["Leerjaar"]; ?></td>
        </tr>
        <tr>
            <th>Aanmeldden bij de succesklas</th>
            <td><?php echo $_GET["Aanmelden"]; ?></td>
        </tr>
        <tr>
            <th>Verwijderen gegevens</th>
            <td><?php echo $_GET["Verwijder"]; ?></td>
        </tr>
        <tr>
            <th>Reden van uitschrijving</th>
        </tr>
        <tr>
            <td><?php echo $_GET["Verwijder"]; ?></td>
        </tr>
    </table>


<?php
include "../../Includes/footer.php"
?>

