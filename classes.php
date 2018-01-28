<?
require_once(__DIR__.'/dbconfig.php');
//require_once(__DIR__.'/userprofile.php');

class User {

	public function __construct(){
		// $dom = new DOMDocument();

	}
	public function __destruct(){

	}

	public function create(){
		// $validator = new Validator($userdata); // $_POST data

		if(isset($_POST['send'])){
			// global $submit;
			// global $name;
			// global $surname;
			// global $email;
			// global $username;
			// global $password;
			// global $password;
			$submit = $_POST['send'];
   			$name = $_POST['user'];
   			$surname = $_POST['surname'];
   			$email = $_POST['email'];
   			$username = $_POST['username'];
   			$password = md5($_POST['pswd']);
   			$password = $password;

   			$postVars = ['user' => '','surname' => '' ,'email' => '','username' => ''];
   			// $postVars = ['fields'=>['user' => '','surname' => '' ,'email' => '','username' => '','pswd' =>''],'errors'=>''];

   			foreach($postVars as $name => $value):
    			if(isset($_POST[$name])):
     			   $postVars[$name] = $_POST[$name];
   				endif;
			endforeach;

   			$redirect_to = htmlspecialchars("{$_SERVER['REQUEST_SCHEME']}"."://"."{$_SERVER['HTTP_HOST']}/register/index.php");
   			// echo $redirect_to;

   			if($name == "" || $surname == "" || $email == "" || $username == ""){
				// $ch = curl_init();
				// curl_setopt($ch, CURLOPT_URL, htmlspecialchars($redirect_to));
				// curl_setopt($ch, CURLOPT_POST, true);
				// curl_setopt($ch, CURLOPT_POSTFIELDS, $postVars);
				// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// $response = curl_exec($ch);
				// echo $response;
				// curl_close($ch);
				$attrs = http_build_query($postVars);
				header("Location:{$redirect_to}?{$attrs}");
				exit;
				}else{
					// if($conn->connect_error){
					// 	die("Connection Error {$conn->connect_error}");
					// }
					// if(!mysqli_select_db($conn,'Register')){
					// 	echo "Database is not selected";
					// }


					global $conn;
					$query = "INSERT INTO `users`(`name`, `surname`, `username`, `email`, `password`) VALUES (\"{$name}\",\"{$surname}\",\"{$username}\",\"{$email}\",\"{$password}\")";
					$query = mysqli_query($conn,$query);
					// mysqli_query($conn,$datasql);

					//mysqli_query($conn, $query);
					if(!$query){die(mysqli_error($conn)); } else { header("Location:login.php?success=true");die(0); }
					mysqli_close($conn);



				}

		}

	}
	public function read(){


	}

	public function update(){

	}

	public function delete(){

	}

}

class Vaidator{
	public $data;

	function __construct($data){
		$this->$data = $data;
	}

	public function name($name) {
		// name validation
		$errors = [];
		$validated = false;
		if(isset($name) && $name):
			// katarvum a validacian
			$regex = '/^asdzxc$/';
			$validated = true;

		else:
			// Empty field
		endif;

		if(empty($errors)):
			return true;
		else:
			return array(['errors']=>$errors);
		endif;
	}
	public function username() {
		// username validation
	}

	public function email() {
		// email validation
	}

	public function is_all_validated() {
		$name_validation = $this->name($data['name']);
		$email_validation = $this->email($data['email']);

		if(empty($name_validation)):

		endif;
	}


}