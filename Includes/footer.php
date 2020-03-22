<?php
/**
 * User: Nazim Özdemir
 * Date: 22/3/2020
 * Time: 11:56
 * File: footer.php
*/

$jaar = date("Y");
$hournow = date('G');
$minutesnow = date('i');

?>
<?php
include '../Includes/variabele.php';
?>

<footer>
    <?php
    echo $year." ".$greeting." op dit moment is het ".$hournow.":".$minutesnow;
    ?>
</footer>
</body>
</html>

