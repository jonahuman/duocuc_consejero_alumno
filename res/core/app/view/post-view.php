<?php
$jb  = PostData::getById($_GET["id"]);
?>

<div class="container">
<div class="row">
<div class="col-md-12">
<h1><?php echo $jb->title; ?></h1>
    <?php if($jb->image!=""):?>
      <img src="./uploads/<?php echo $jb->image; ?>" class="img-responsive" >
    <?php endif; ?>
<br><div class="panel panel-default">
<div class="panel-body">
<label>Contenido</label>
<p><?php echo $jb->content; ?></p>
<label>Categoria</label>
<p><a href="./?view=posts&id=<?php echo $jb->category_id; ?>"><?php echo CategoryData::getById($jb->category_id)->name; ?></a></p>


</div>
</div>
<?php if(Core::$user!=null):?>
<div class="panel panel-default">
<div class="panel-heading">Escribir comentario</div>
<div class="panel-body">

<form method="post" action="./?action=send" enctype="multipart/form-data">
<input type="hidden" name="post_id" value="<?php echo $jb->id; ?>">


  <div class="form-group">
    <label for="exampleInputEmail1">Comentarios</label>
    <textarea name="comment" class="form-control" id="exampleInputEmail1" placeholder="Comentarios" required rows="3"></textarea>
  </div>




  <button type="submit" class="btn btn-default">Enviar Comentario</button>
</form>

</div>
</div>
<?php endif;  ?>



<?php
$comments  = CommentData::getPublicByPost($jb->id);
?>
<?php if(count($comments)>0):?>
<div class="panel panel-default">
<div class="panel-heading">Comentarios</div>
<div class="panel-body">


<?php foreach($comments as $com):
$uc = UserData::getById($com->user_id);
?>
  <p><?php echo $com->comment; ?></p>
  <p>por <b><?php echo $uc->name." ".$uc->lastname; ?></b></p>
  <p class="text-muted"><?php echo $com->created_at;?></p>
  <hr>
<?php endforeach ; ?>

</div>
</div>
<?php else:?>
  <p class="alert alert-warning">No hay comentarios</p>
<?php endif; ?>


</div>
</div>
</div>
<br><br><br><br>