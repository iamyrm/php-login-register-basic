<?php
require "includes/header.php";
require 'config.php';

// Do not let user to go to login page if the user is already logged in
if (isset($_SESSION['username'])) {
  header("location:index.php");
}

if (isset($_POST['login_form'])) {
  if (empty($_POST['email']) || empty($_POST['pwd'])) {
?>
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <p class="text-center text-danger">Please fillup all the form fields</p>
        </div>
      </div>
    </div>
<?php
  } else {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pwd = $_POST['pwd'];

    $login = $conn->query("SELECT * FROM users WHERE email='$email'");
    $login->execute();

    $data = $login->fetch(PDO::FETCH_ASSOC);

    if ($login->rowCount() > 0) {
      if (password_verify($pwd, $data['pwd'])) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        header("location:index.php");
      } else {
        echo "Invalid email or password";
      }
    } else {
      echo "Invalid email or password";
    }
  }
}

?>
<div class="container my-4 d-flex justify-content-center">
  <div class="row justify-content-center w-50">
    <div class="col">
      <div class="text-center my-5">
        <h2>Login Page</h2>
      </div>
      <form method="POST" action="./login.php">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password</label>
          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password" required>
        </div>
        <p class="form-label">Don't have an account? <a class="text-decoration-none text-danger" href="./register.php">Create Here</a></p>
        <button type="submit" name="submit" class="btn btn-primary">Login Here</button>
        <input type="hidden" name="login_form">
      </form>
    </div>
  </div>
</div>

<?php require "includes/footer.php"; ?>