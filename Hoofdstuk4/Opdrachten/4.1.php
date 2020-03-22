<?php
/**
 * User: Nazim Özdemir
 * Date: 22-3-2020
 * Time: 12:45
 * File: 4.1.php
 */
?>
<div class="box">
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    $jaar = date("Y");
    $moment ='';

    if($uur >= 0 && $uur <= 5)
    {
        $moment = 'Goedenacht';
    }
    else if ($uur >= 5 && $uur <= 12)
    {
        $moment = 'Goedeochtend';
    }
    else if($uur >= 12 && $uur <= 17)
    {
        $moment = 'Goedemiddag';
    }
    else if ($uur >= 17 && $uur <= 0)
    {
        $moment = 'Goedeavond';
    }

    echo $moment . ' bezoeker, &copy; Nazim Ozdemir ' . $jaar;
    ?>
</div>
</body>
</html>