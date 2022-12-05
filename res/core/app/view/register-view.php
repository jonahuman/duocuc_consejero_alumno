
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Registro de alumnos</h1>
<div class="panel panel-default">
<div class="panel-heading">Registro de alumnos</div>
<div class="panel-body">

<form method="post" action="./?action=processregister">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputEmail1" placeholder="Password">
  </div>




  <div class="checkbox">
    <label>
      <input type="checkbox" name="accept" required> Acepto los terminos y condiciones
    </label>
  </div>
  <button type="submit" class="btn btn-default">Registrarme</button>
</form>

</div>
</div>







</div>
</div>
</div>
<br><br><br><br>