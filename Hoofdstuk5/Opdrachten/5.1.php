<?php
/**
 * User: Nazim Özdemir
 * Date: 22-03-2020
 * Time: 19:00
 * File: 5.1.php
 */
?>
<?php
include "../../Includes/header.php"
?>
    <br><br>
    <h1>Restaria Kees Kroket</h1>
    <p>Visserstraat 12</p>
    <p>5211 DN s'Hertogenbosch</p>
    <p>073 613 6720</p>
    <p>info@restariaKeesKroket.nnl</p><br>

    <h3>Taak1</h3>
    <div class="Test">
        <form action="form_data.php" method="get">
            <label>Bedrijfsnaam: </label><br>
            <input name="company" type="text"> <br><br>

            <label>Voornaam: </label><br>
            <input name="firstname" type="text"> <br><br>

            <label>Achternaam: </label><br>
            <input name="lastname" type="text"> <br><br>

            <label>Telefoon: </label><br>
            <input name="number" type="text"> <br><br>

            <label>E-mail: </label><br>
            <input name="mail" type="text"> <br><br>

            <label>Bericht: </label><br>
            <input name="message" type="text"> <br><br>

            <input type="submit" name="Versturen" value="Versturen">
        </form>
    </div>
    <br><br>
<?php
include "../../includes/Footer.php";
?>


