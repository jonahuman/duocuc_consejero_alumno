<?php 
// si el usuario no esta logeado
if(!isset($_SESSION["user_id"])){ Core::redir("./");}
$user= UserData::getById($_SESSION["user_id"]);
// si el id  del usuario no existe.
if($user==null){ Core::redir("./");}
?>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Hola, <?php echo $user->name; ?> <small>Mis publicaciones</small></h2>

</div>
</div>
</div>
<section class="container">
<div class="row">
	<div class="col-md-12">



<br>
<br>
		<?php

		$users = PostData::getAllByUser(Core::$user->id);
		if(count($users)>0){
			// si hay usuarios
			?>
<div class="box box-primary">
<div class="box-body">
			<table class="table table-bordered table-hover datatable">
			<thead>
			<th>Titulo</th>
      <th>Seccion</th>
      <th>Creacion</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->title; ?></td>
        <td><?php echo CategoryData::getById($user->category_id)->name; ?></td>

        <td><?php echo $user->created_at; ?></td>
				<td style="width:130px;">

<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal<?php echo $user->id; ?>">
Editar
</button>
<a href="index.php?action=posts&opt=del&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}

				?>
				</table>
<?php foreach($users as $user):?>
<!-- Modal -->
<div class="modal fade" id="editModal<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Articulo</h4>
      </div>
      <div class="modal-body">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=posts&opt=update" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-4 control-label">Titulo*</label>
    <div class="col-md-6">
      <input type="text" name="title" value="<?php echo $user->title;?>" class="form-control" id="title" placeholder="Titulo">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-4 control-label">Contenido *</label>
    <div class="col-md-6">
      <textarea name="content" required class="form-control" id="content" placeholder="Contenido "><?php echo $user->content;?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-4 control-label">Imagen destacada (1920x1080)*</label>
    <div class="col-md-6">
      <input type="file" name="image" >
    </div>
  </div>

<input type="hidden" name="category_id" value="<?php echo $user->category_id; ?>">




  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Articulo</button>
    </div>
  </div>
</form>

      </div>

    </div>
  </div>
</div>
<?php endforeach; ?>
				</div>
				</div>
				<?php


		}else{
			echo "<p class='alert alert-danger'>No hay Articulos</p>";
		}


		?>


	</div>
</div>

</section>