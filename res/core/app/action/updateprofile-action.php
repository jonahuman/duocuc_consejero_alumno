<?php

if(count($_POST)>0){
	$user = Core::$user;
	$image = $user->image;

	$imx = new Upload($_FILES["image"]);
	if($imx->uploaded){
		$imx->Process("./uploads/");
		if($imx->processed){
			$image = $imx->file_dst_name;
		}
	}

	$user->name = $_POST["name"];
	$user->image = $image;
	$user->lastname = $_POST["lastname"];
	$user->email = $_POST["email"];
	$user->update_profile();

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();
print "<script>alert('Se ha actualizado el password');</script>";

	}

print "<script>window.location='index.php?view=profile';</script>";


}


?>