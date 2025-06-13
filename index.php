<?php require "includes/header.php"; ?>

<div class="container py-4">
   <h1 class="text-success text-center">
      HELLO <?php if (isset($_SESSION['username'])) {
               echo $_SESSION['username'];
            } ?>
   </h1>
</div>

<?php require "includes/footer.php"; ?>