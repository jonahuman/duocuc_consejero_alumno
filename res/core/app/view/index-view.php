<div class="container">
<div class="row">
<div class="col-md-12">
<div class="">
</div>
<div class="row">
<div class="col-md-9">

<h2>Bienvenido a Furyum</h2>

<p class="lead">Te invitamos participar en nuestro foro ...</p>

<?php 
$cats = CategoryData::getAll();
if(count($cats)>0):
	?>
<table class="table table-bordered">
<thead>
	<th></th>
</thead>
<?php
foreach($cats as $cat):?>
<tr>
<td>
<h4><a href="./?view=posts&id=<?php echo $cat->id; ?>"><?php echo $cat->name; ?></a></h4>
<p><?php echo $cat->description; ?></p>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay categorias</p>
<?php endif; ?>
</div>



</div>


</div>
</div>
</div>
<br><br><br><br>