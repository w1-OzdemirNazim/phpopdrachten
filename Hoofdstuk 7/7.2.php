
<?php
/**
 * User: Nazim Özdemir
 * Date: 3-6-2020
 * Time: 18:00
 * File: 7.2.php
 */
?>
<?php
include "../Includes/header.php"
?>
<?php
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
    echo "database connectie gelukt <br><br>";
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
?>
<?php
try
{
    $sql = 'SELECT * FROM joke';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
$aJokes = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    $aJokes[] = $row;
    $counter = $row['id'];
}
?>
<table>
    <tr>
        <th>ID</th>
        <th>Joketext</th>
        <th>Jokeclou</th>
        <th>Jokedate</th>
    </tr>
    <?php
    for($i=0; $i<$counter; $i++) {
        echo "<tr><td>" . $aJokes[$i]['id'] . "</td><td>" . $aJokes[$i]['joketext'] . "</td><td>" .$aJokes[$i]['jokeclou'] . "</td><td>" . $aJokes[$i]['jokedate'] . "</td></tr>";
    }
    ?>
</table>
<?php
include "../Includes/footer.php"
?>