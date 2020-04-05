<?php
/**
 * User: Nazim Özdemir
 * Date: 05-04-2020
 * Time: 13:15
 * File: form_data5.3.php
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
        <link href="../../CSS/style.css" type="text/css" rel="stylesheet">

    </head>
<body>
    <style>
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
    <h2>Uitwerking van <a href="../../Index.php"> PHP-opdrachten</a></h2>
<div class="box">

<?php
include "../../Includes/function.php"
?>
    <table>
        <tr>
            <th>Vraag</th>
            <th>Antwoord</th>
        </tr>
        <tr>
            <th>Naam</th>
            <td><?php echo $_POST["First-LastName"]; ?></td>
        </tr>
        <tr>
            <th>Leeftijd</th>
            <td><?php echo $_POST["Age"]; ?></td>
        </tr>
        <tr>
            <th>Gemeente</th>
            <td><?php echo $_POST["Township"]; ?></td>
        </tr>
        <tr>
            <th>Inwoners</th>
            <td><?php echo $_POST["citizens"]; ?></td>
        </tr>
        <tr>
            <th>Aantal besmet</th>
            <td><?php echo $_POST["infected"]; ?></td>
        </tr>
        <tr>
            <th>Kennissen besmet</th>
            <td><?php echo $_POST["Question"]; ?></td>
        </tr>
        <tr>
            <th colspan="2">De kans is in realiteit groter, omdat je via je eigen netwerk besmet kan raken.</th>
        </tr>
        <tr>
            <th>Kans per ontmoeting op besmetting</th>
            <td><?php echo $_POST[echoKans()]; ?>%</td>
        </tr>
        <tr>
            <th>Kans is 1 op</th>
            <td><?php echo $_POST[getKans1Op()]; ?>%</td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo $_POST[vergelijkOorzaken ()]; ?>
            </td>
        </tr>
    </table>

<?php
include "../../Includes/footer.php"
?>