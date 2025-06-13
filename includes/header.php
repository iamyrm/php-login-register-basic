<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD | Yyagya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="container-fluid py-3 bg-dark text-white text-center">
      <ul class="list-unstyled ps-0 d-flex gap-3 mb-0 justify-content-center align-items-center">
        <li class="mb-0"><a class="text-decoration-none text-white" href="./index.php">Home</a></li>

        <?php if (isset($_SESSION['username'])) : ?>

          <li class="mb-0"><a class="text-decoration-none text-white" href="./logout.php">Logout</a></li>

        <?php else: ?>

          <li class="mb-0"><a class="text-decoration-none text-white" href="./login.php">Login</a></li>
          <li class="mb-0"><a class="text-decoration-none text-white" href="./register.php">Register</a></li>

        <?php endif; ?>

      </ul>
    </div>
  </header>
  <main>