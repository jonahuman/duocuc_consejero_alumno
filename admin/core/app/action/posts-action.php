<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
	$user = new PostData();
	$user->title = $_POST["title"];
	$user->content = $_POST["content"];

	$image = "";
	$img = new Upload($_FILES["image"]);
	if($img->uploaded){
		$img->Process("../uploads/");
		if($img->processed){
			$image = $img->file_dst_name;
		}
	}
	$user->image = $image;
	$user->category_id = $_POST["category_id"];
	$user->user_id = $_SESSION["user_id"];
	$user->add();
	Core::redir("./?view=posts");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){
	$user = PostData::getById($_POST["user_id"]);
	$user->title = $_POST["title"];
	$user->content = $_POST["content"];

	$image = $user->image;
	$img = new Upload($_FILES["image"]);
	if($img->uploaded){
		$img->Process("../uploads/");
		if($img->processed){
			$image = $img->file_dst_name;
		}
	}
	$user->image = $image;

	$user->category_id = $_POST["category_id"];
	$user->status = isset($_POST["status"])?1:0;

	$user->update();
	Core::redir("./?view=posts");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$category = PostData::getById($_GET["id"]);
	$category->del();
	Core::redir("./index.php?view=posts");
}

?>