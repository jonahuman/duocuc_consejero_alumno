<?php
// autoload.php
// [created] 29 octubre del 2022
// [rebuilded] 04 diciembre del 2022
// esta funcion elimina el hecho de estar agregando los modelos manualmente
// by evilnapsis

function my_autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}

spl_autoload_register("my_autoload");

?>