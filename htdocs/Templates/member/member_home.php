<!DOCTYPE html>
    <html>
    <?php
    include_once('member_defaults/member_head.php');
    ?>
    <body>
        <main class='container'>
        <?php
        include_once ('member_defaults/member_header.php');
        include_once ('member_defaults/member_menu.php');
        ?>

            <h4>Welkom <?=$_SESSION['user']->first_name?><?= $_SESSION['user']->last_name?></h4>

        <?php
        include_once('member_defaults/member_footer.php');
        ?>
    </body>
</html>
