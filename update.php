<?php include("config/db.php") ?>
<?php include("inc/header.php") ?>

<?php
if (isset($_POST['submit'])) {
      $no = $_POST['no'];
      $makanan = $_POST['makanan'];
      $minuman = $_POST['minuman'];
      $disarankan = $_POST['disarankan'];

      if ($makanan != "" && $minuman != "" && $disarankan != "") {
            $sql = "UPDATE post SET makanan= '$makanan', minuman='$minuman', disarankan='$disarankan' WHERE no =$no";


            $stmt = $pdo->prepare($sql);
            if ($stmt->execute()) {
                  header("location:info.php");
            } else {
                  echo "Maaf, gagal mengupdate data";
            }
      } else {
            $error  = "Mohon isi semua data!";
      }
}
?>
