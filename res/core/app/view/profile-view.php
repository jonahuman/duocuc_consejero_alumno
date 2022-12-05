<?php

?>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Actualizar Perfil</h1>
<div class="panel panel-default">
<div class="panel-heading">Actualizar Perfil</div>
<div class="panel-body">

<form method="post" action="./?action=updateprofile" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Imagen</label>
    <?php if(Core::$user->image!=""):?>
      <br>
      <img src="./uploads/<?php echo Core::$user->image; ?>" style="width:200px; ">
      <br><br>
    <?php endif; ?>
    <input type="file" name="image" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" value="<?php echo Core::$user->name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="lastname" value="<?php echo Core::$user->lastname; ?>" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" required class="form-control" value="<?php echo Core::$user->email; ?>" id="exampleInputEmail1" placeholder="Correo electronico">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Password">
  </div>


  <button type="submit" class="btn btn-success">Actualizar Perfil</button>
</form>

</div>
</div>







</div>
</div>
</div>
<br><br><br><br>