<?php
require_once('home/header.php');
?>
<div class="text-center p-4 mb-3">
  <div class="row row-cols-2">
    <div class="col">
      <h2 class="text-info m-4">Video</h2>
      <iframe width="500" height="300" src="https://www.youtube.com/embed/oDTbx_Yn9g0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col">
      <h2 class="text-info m-4">Audio</h2>
      <div class="mt-5" data-video="ivDcsqJlmeo" data-autoplay="0" data-loop="1" id="youtube-audio">
      </div>
    </div>
  </div>
  <div id="gallery" class="w-100">
    <a href="gallery.php" class="btn btn-outline-light btn-sm w-25 m-3">Regresar</a>
    <a href="contact.php" class="btn btn-outline-light btn-sm w-25 m-3">Continuar</a>
  </div>
</div>
<?php
// require_once('home/footer.php');
?>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="https://cdn.rawgit.com/labnol/files/master/yt.js"></script>