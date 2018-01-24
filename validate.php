<?php
class User(){
	public function create(){

	}

	public function read(){

	}

	public function update(){

	}

	public function delete(){

	}
	if(isset($_POST['send']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
   	$user_name = $_POST['user'];
   	$user_email = $_POST['user'];
   	$user_password = $_POST['paswd'];
   	$password_repeat = $_POST['repswd'];
	}
}
