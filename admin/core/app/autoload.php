<?php
// autoload.php
// 04 de diciembre del 2022
// esta funcion elimina el hecho de estar agregando los modelos manualmente


function __autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 

}



?>