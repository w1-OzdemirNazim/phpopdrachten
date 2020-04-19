<?php
/**
 * User: Nazim Özdemir
 * Date: 19-04-2020
 * Time: 23:35
 * File: login.php
 */
?>

<?php
include "../Includes/header.php"
?>
<form action="script.php" method="post">
    <label>Username</label><input name="Username" type="text"><br>
    <label>Password</label><input name="Password" type="password"><br>
    <input type="submit" name="verzenden" value="login">
</form>
<?php
include "script.php"
?>


<?php
include "../Includes/footer.php"
?>
