<!DOCTYPE html>
<html>
<?php
include_once('admin_defaults/admin_head.php');
?>

<body>
<main class='container'>
<?php
include_once ('admin_defaults/admin_header.php');
include_once ('admin_defaults/admin_menu.php');
?>

    <div class='p-4 p-md-5 mb-4 text-white rounded '>
        <div class=' px-0'>
            <h1 class='display-4 fst-italic text-warning'>Welcome <?php echo ($_SESSION['user']->first_name)?></h1> <!--insert user name here-->
        </div>
        <?php
        echo "<p class='text-dark'>";
       // var_dump($_SESSION['user']);
        //      echo 'Naam '.$_SESSION['user'][0]->name.'<br>';
        //        echo 'Email '.$_SESSION['user'][0]->email.'<br>';
        echo "</p>";
        ?>

        <div class="row">
            <div class="col-12 text-dark">
                <?php
                $email=$_SESSION['user']->email;
                echo "<p class='text-dark'>Uw email: <b>  $email</b></p>";

                ?>
            </div>
        </div>
        <!--Update password form-->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg btn-outline-warning btn-block white" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Wachtwoord reset
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning" id="exampleModalLabel">Update Wachtwoord</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--                        Start form-->
                        <form  method="post">
                            <p class="text-danger"><label>Oud wachtwoord:</label></p>
                            <input type="password" name="old-password">

                            <p  class="text-danger"><label>Nieuw wachtwoord:</label></p>
                            <input type="password" name="new-password">

                    </div>
                    <div class="modal-footer">
                        <button type="button submit" name="cancel" class="btn btn-danger" data-bs-dismiss="modal">Sluiten</button>
                        <!--                                Sent form-->
                        <button type="button submit" name="change" class="btn btn-primary">Opslaan</button>
                    </div>
                    </form>
                    <!--                        End form-->
                </div>
            </div>
        </div>
    </div>

    </div>

</main>
<!--    End container  -->

<?php
include_once('admin_defaults/admin_footer.php');
?>
<script src="../../public/js/custom.js"></script>
</body>
</html>