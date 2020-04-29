<?php include("inc/header.php"); ?>
<?php include("config/db.php"); ?>
<?php
$no = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM post WHERE no = $no");
if ($stmt->rowCount() > 0) {
   while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
      $no = $row->no;
      $makanan = $row->makanan;
      $minuman = $row->minuman;
      $disarankan = $row->disarankan;
      $published_on = $row->published_on;
   }
}
?>
<div class="container">
   <h3>Rekomendasi Menu Berbuka Puasa oleh Pengunjung </h3>
   <h1>lihat data</h1>
   <div class="row">
      <a href="info.php" class="btn btn-primary">Back</a>

      <div class="col-lg-12">
         <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">post </a>
            <p class="list-group-item list-group-item-action">Makanan: <?php echo $makanan; ?></p>
            <p class="list-group-item list-group-item-action">Minuman: <?php echo $minuman; ?></p>
            <p class="list-group-item list-group-item-action">Disarankan Oleh: <?php echo $disarankan; ?></p>
            <p class="list-group-item list-group-item-action">Tanggal Publish: <?php echo $published_on; ?></p>

         </div>
      </div>
   </div>
</div>
<?php include("inc/footer.php"); ?>