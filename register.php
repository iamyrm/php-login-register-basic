<?php
require "includes/header.php";
require 'config.php';

// Do not let user to go to register page if the user is already logged in 
if (isset($_SESSION['username'])) {
  header("location:index.php");
}

// Registration form logic

if (isset($_POST['register_form'])) {
  if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pwd'])) {
?>
    <div class="container py-4">
      <div class="row">
        <div class="col">
          <p class="text-center text-danger">Please fillup all the forms</p>
        </div>
      </div>
    </div>
<?php
  } else {
    $username = htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pwd = password_hash(trim($_POST['pwd']), PASSWORD_DEFAULT);

    $insert = $conn->prepare("INSERT INTO users(username,email,pwd) VALUES(:username,:email,:pwd)");

    $insert->execute([
      ':username' => $username,
      ':email' => $email,
      ':pwd' => $pwd
    ]);
  }
}
?>

<div class="container my-4 d-flex justify-content-center">
  <div class="row justify-content-center w-50">
    <div class="col">
      <div class="text-center my-5">
        <h2>Register Page</h2>
      </div>
      <form method="POST" action="register.php">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password" required>
        </div>
        <p class="form-label">Already have an account? <a class="text-decoration-none text-danger" href="./login.php">Login</a></p>
        <button type="submit" name="submit" class="btn btn-primary">Register Here</button>
        <input type="hidden" name="register_form">
      </form>
    </div>
  </div>
</div>

<?php require "includes/footer.php"; ?>