<!DOCTYPE html>
<html>

<head>
  <title>Create,Read,Update,Edit</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
  <script type="text/javascript" src="assets/js/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function() {
      $('published_on').datepicker();
    });
  </script>
</head>

<body>
  <div class="container-fluid">
    <P></P>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="200" height="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="imsakiyah.php">IMSAKIYAH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php">MENU BERBUKA</a>
          </li>
        </ul>
        <a href="index.php" type="button" class="btn btn-primary">Logout</a>
      </div>

    </nav>