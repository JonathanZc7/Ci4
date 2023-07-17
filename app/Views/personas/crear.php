<?php echo $cabecera; ?>


<div class="card" style="background-color:cadetblue; border-color:darkblue;">
  <img class="card-img-top" src="holder.js/100x180/" alt="">
  <div class="card-body">
    <h4 class="card-title"><Center>FORMULARIO DE INGRESO</Center></h4>
    <p class="card-text">Insertar los Datos Requeridos</p>
  </div>
</div>

<form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data">
  <div class="form-group">

    <label for="my-input">Id</label>
    <input id="Id" class="form-control" type="int" name="Id">

    <label for="my-input">Cedula</label>
    <input id="Cedula" class="form-control" type="int" name="Cedula">


    <label for="my-input">Nombres</label>
    <input id="Nombres" class="form-control" type="texto" name="Nombres">

    <label for="my-input">Correo Electronico</label>
    <input id="Correo" class="form-control" type="int" name="Correo">

  </div>

  <input name="" id="" class="btn btn-primary" type="submit" value="GUARDAR">

  

</form>

<?=$piepagina?>
