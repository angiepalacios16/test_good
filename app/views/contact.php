<?php
require_once('home/header.php');
?>
<div class="text-center">
  <h2 class="text-info m-2">Contacto</h2>
  <form class="text-justify">
    <div class="form-group">
      <label class="text-info" for="exampleInputPassword1">Nombre</label>
      <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
      <label class="text-info" for="exampleInputEmail1">Correo</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label class="text-info" for="exampleFormControlTextarea1">Comentario</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>
    <div class="text-center p-3">
      <button type="submit" class="btn btn-outline-info btn-sm w-25 m-3">Enviar</button>
    </div>
  </form>
  <div id="gallery" class="text-center w-100 ">
    <a href="video.php" class="btn btn-outline-light btn-sm w-25 m-3">Regresar</a>
  </div>
</div>
<?php
// require_once('home/footer.php');
?>