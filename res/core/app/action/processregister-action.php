<?php

if(isset($_POST)){
	if($_POST["email"]!="" && $_POST["password"]!=""){
	$ux = UserData::getByEmail($_POST["email"]);
	
	if($ux==null){
		$u = new UserData();
		$u->name = $_POST["name"];
		$u->lastname = $_POST["lastname"];
		$u->email = $_POST["email"];
		$u->password = sha1(md5($_POST["password"]));
		$u->register();
		Core::alert("Correcto, ahora puedes iniciar sesion!");
		Core::redir("./?view=login");
	}else{
		Core::alert("Error!");
		Core::redir("./?view=register");
	}

}else{
	Core::redir("./");

}
}
?>