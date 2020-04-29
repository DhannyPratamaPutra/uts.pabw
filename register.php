<?php include("config/db.php"); ?>
<?php

$msg = "";

if (isset($_POST['submit'])) {

   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = sha1($password, PASSWORD_DEFAULT);
   $cpassword = $_POST['cpassword'];

   if ($username != "" && $email != "" && $password != "" && $cpassword != "") {
      $sql = "INSERT INTO login(username, email, password) VALUES('$username','$email','$password')";

      $stmt = $pdo->prepare($sql);
      if ($stmt->execute()) {
         header("location:index.php");
      } else {
         echo "Maaf, gagal menambahkan data";
      }
   } else {
      $error  = "Mohon isi semua data!";
   }
}





if (isset($_POST['sudah'])) {
   header("location:index.php");
}



?>
<html>

<head>
   <title>PHP Password hashing-ragister</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body class="bg bg-white">

   <div class="container" style="margin-top: 100px;">
      <div class="row">
         <div class="col">
            <h1 style="text-align:center;">Registration</h1>
            <hr>
            <?php if ($msg != "") echo $msg . "<br><br><br>"; ?>
            <form method="post" action="register.php">
               <p style="text-align:center;"> Fill up the form with correct values</p>
               <label for="username"><b>Username</b></label>
               <input class="form-control" name="username" placeholder="Username"><br>

               <label for="email"><b>Email</b></label>
               <input class="form-control" name="email" type="email" placeholder="Email"><br>

               <label for="password"><b>Your Password</b></label>
               <input class="form-control" minilength="5" name="password" type="password" placeholder="Your Password"><br>

               <label for="cpassword"><b>Confirm Your Password</b></label>
               <input class="form-control" minilength="5" name="cpassword" type="password" placeholder="Confirm your password"><br>
               <input class="btn btn-block btn-primary" name="submit" type="submit" value="Sign Up"><br>

            </form>
            <div class="row justify-content-center">
               <h6 text-align="center">Already have an account?</h6>
               <a class="btn btn-block btn-outline-primary" href="index.php" role="button">Back to Login</a>
            </div>
         </div>
      </div>
   </div>


</body>

</html>