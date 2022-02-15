<!DOCTYPE html>
<html lang="">
<?php
include_once('defaults/head.php');
?>

  <body>

   <div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

       <?php if (isset($_SESSION['user']) == true): ?>
           <form method="post">
               <div class="mb-3">
                   <label for="example2" class="form-label">Weet je zeker dat je wilt uitloggen?</label><br>
                   <button type="submit" name="logout" class="btn btn-warning">Logout</button>
               </div>
           </form>
       <?php else: ?>
    <form method="post">
    <div class="mb-3">
        <label for="example1" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" id="example1">
    </div>
    <div class="mb-3">
        <label for="example2" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="example2">
    </div>

    <button type="submit" name="login" class="btn btn-warning">Submit</button>
</form><?php endif; ?>

<?php
include_once ('defaults/footer.php');
?>
  </div>
 </body>
</html>
