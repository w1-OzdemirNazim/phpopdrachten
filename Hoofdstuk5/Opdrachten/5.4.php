
<?php
/**
 * User: Nazim Özdemir
 * Date: 12-04-2020
 * Time: 22:00
 * File: 5.4.php
 */
?>

<?php
include "../../Includes/header.php"
?>
<style>
    .groen{
        color: green;
    }
    .rood{
        color: red;
    }
</style>
<form action="5.4.php" method="post">
    <label>Komt er een ambulance aan?</label>
    <input name="ambulanceComing" type="radio" value="ja">ja
    <input name="ambulanceComing" type="radio" value="nee">nee<br>

    <label>Stoplicht kleur?</label>
    <input name="trafficLightColor" type="radio" value="groen">Groen
    <input name="trafficLightColor" type="radio" value="oranje">Oranje
    <input name="trafficLightColor" type="radio" value="rood">Rood<br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
//action is hetzelfde script als het formulier.
if (isset($_POST['submit'])) {
    echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
//een of beide radiobuttons zijn niet aangevinkt.
    if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComing'])) {
        echo "Of stoplicht kleur is onbekend of het is onbekend of de ambulance komt.";
    }
    else
    {
        $trafficLightColor = $_POST['trafficLightColor'];
        $ambulanceComing = $_POST['ambulanceComing'];
        echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een
ambulance aan.";
//of je mag doorrijden ja of nee
        if ($trafficLightColor == "groen" && $ambulanceComing == 'nee')
        {
            echo "<div class='groen box'>U mag doorrijden";
        }
        else
        {
            echo " <div class='rood box'>U moet stoppen";
        }
        echo "</div>";
    }
}
?>

<?php
include "../../Includes/footer.php"
?>