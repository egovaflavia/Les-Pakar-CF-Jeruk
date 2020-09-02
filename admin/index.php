<?php
session_start();
include '../assets/model/db.php';
include '../assets/libs/helper/helper.php';
$db = new Db();
if (empty($_SESSION['akun'])) {
  echo "
  <script>alert('Anda harus login terlebih dahulu');location='../'</script>
  ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Pakar CF</title>
  <?php include 'components/head.php' ?>
</head>

<body id="page-top">

  <?php include 'components/top-bar.php' ?>

  <div id="wrapper">

    <?php include 'components/menu.php' ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php include 'content.php' ?>

      </div>

      <?php include 'components/footer.php' ?>

    </div>

  </div>

  <?php include 'components/modal.php' ?>

  <?php include 'components/scripts.php' ?>
</body>

</html>