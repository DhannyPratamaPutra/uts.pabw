<?php include("config/db.php"); ?>
<?php
if (isset($_POST["login"])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   if (empty($_POST["username"]) || empty($_POST["password"])) {
      $message = 'semua data harus terisi';
   } else {
      $query = "SELECT * FROM login WHERE username = '$username'";
      $stmt = $pdo->prepare($query);
      $stmt->execute(
         array(
            'username' => $_POST["username"],
            'password' => $_POST["password"]
         )
      );
      $count = $stmt->rowCount();
      if ($count > 0) {
         $_SESSION["username"] = $_POST["username"];
         header("location:home.php");
      } else {
         $message = 'Data yang anda masukkan salah';
      }
   }
}
if (isset($_POST['daftar'])) {
   header("location:register.php");
}
?>



<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/login.css">
   <title>Login</title>
</head>

<body>
   <br />
   <?php
   if (isset($message)) {
      echo '<label class="text-danger">data yang anda masukkan salah/tidak lengkap</label>';
   }
   ?>
   <div class="container bg-blue">
      <img src="logo.png" alt="logo" width="100%">
      <h4 class="text-center">Silahkan login</h4>
      <hr>
      <form action="" method="post">
         <div class="form grup">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">

            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">

            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
         </div>


         <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
         <button type="reset" class="btn btn-outline-danger" name="reset">RESET</button> <br><br>
         <div class="d-flex justify-content-center links">
            Don't have an account? <a href="register.php" class="ml-2">Sign Up</a>
         </div>
      </form>
   </div>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>