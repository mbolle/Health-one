<!DOCTYPE html>
<html lang="">
<?php
global $times;
include_once('defaults/head.php');
?>
<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <table>
        <th>Openingstijden</th>
        <?php foreach($times as $time):?>
            <tr><?=$time->day?> : <?=$time->opening_time?> - <?=$time->closing_time?></tr>
        <?php endforeach ?>
    </table>

    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>