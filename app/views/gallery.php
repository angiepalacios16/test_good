<?php
require_once('home/header.php');
?>
<div class="text-center">
  <h2 class="text-info m-2">Galería</h2>
  <?php
  $url = "../assets/images";
  $folder = dir($url);
  while (($img = $folder->read()) !== false) {
    if (preg_match('/jpg/', $img)) {
      print '<img id="gallery" class="border border-2 border-white rounded  m-2" src="' . $url . "/" . $img . '" width="270" height="130">';
    }
  }
  $folder->close();
  ?>
  <div id="gallery" class="w-100">
    <a href="../../index.php" class="btn btn-outline-light btn-sm w-25 m-3">Regresar</a>
    <a href="video.php" class="btn btn-outline-light btn-sm w-25 m-3">Continuar</a>
  </div>
</div>
<?php
// require_once('home/footer.php');
?>