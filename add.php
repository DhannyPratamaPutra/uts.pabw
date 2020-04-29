<?php include("inc/header.php"); ?>
<?php include("config/db.php"); ?>
<?php
if (isset($_POST['submit'])) {
   $makanan = $_POST['makanan'];
   $minuman = $_POST['minuman'];
   $disarankan = $_POST['disarankan'];
   $published  = $_POST['published_on'];
   $published_on = strtotime($published);
   $published_date    = date("Y/m/d", $published_on);
   if ($makanan != "" && $minuman != "" && $disarankan != "" && $published != "") {
      $sql = "INSERT INTO post(makanan, minuman, disarankan, published_on) VALUES('$makanan','$minuman','$disarankan','$published_date')";

      $stmt = $pdo->prepare($sql);
      if ($stmt->execute()) {
         header("location:info.php");
      } else {
         echo "Maaf, gagal menambahkan data";
      }
   } else {
      $error  = "Mohon isi semua data!";
   }
}
?>
<div class="container">
   <h3>Rekomendasi Menu Berbuka Puasa oleh Pengunjung</h3>
   <h1>Add post</h1>
   <div class="row">
      <a href="info.php" class="btn btn-primary">Back</a>
   </div>
   <hr>
   <div class="row">
      <form class="form-horizontal" action="add.php" method="POST">
         <fieldset>
            <div class="form-group">
               <label class="col-sm-2">Makanan</label>
               <div class="col-sm-20">
                  <input type="text" name="makanan" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Minuman</label>
               <div class="col-sm-20">
                  <input type="text" name="minuman" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Disarankan Oleh</label>
               <div class="col-sm-20">
                  <input type="text" name="disarankan" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4">Date</label>
               <div class="col-sm-20">
                  <input type="date" id="published_on" name="published_on" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4"></label>
               <div class="col-sm-20">
                  <?php if (isset($_POST['submit'])) : ?>
                     <div class="alert alert-dissmissible alert-warning">
                        <p><?php echo $error; ?></p>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group">

               <div class="col-sm-20">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </div>
            </div>
         </fieldset>
      </form>

   </div>
</div>
<?php include("inc/footer.php"); ?>