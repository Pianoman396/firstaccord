<?
//Security issue
require_once(__DIR__.'/load.php');
if(!defined(LOAD)){
	exit('Fuck You');
}
require_once(__DIR__.'/dbconfig.php');

class User {

	public function __construct(){
		// $dom = new DOMDocument();

	}
	public function __destruct(){

	}

	public function create($datas){
		// $validator = new Validator($userdata); // $_POST data
		if(isset($_POST['send']) && $_POST['send']){


			   $name = $_POST['user'];
   			   $surname = $_POST['surname'];
   			   $email = $_POST['email'];
   			   $username = $_POST['username'];
   			   $password = hash('sha512',$_POST['pswd']);
   			   // $password = $password;
   			   $submit = $_POST['send'];

   			$postVars = ['user' => '','surname' => '','email' => '','username' => ''];
   			// $postVars = ['fields'=>['user' => '','surname' => '' ,'email' => '','username' => '','pswd' =>''],'errors'=>''];

   			foreach($postVars as $name => $value):
    			if(isset($_POST[$name])):
     			   $postVars[$name] = $_POST[$name];
   				endif;
			endforeach;

			$current_url= "{$_SERVER['REQUEST_SCHEME']}"."://"."{$_SERVER['HTTP_HOST']}";
   			$redirect_to = htmlspecialchars("{$current_url}/register/index.php");
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
					$query = "INSERT INTO `users` (`name`, `surname`, `username`, `email`, `password`) VALUES (\"$name\",\"$surname\",\"$username\",\"$email\",\"$password\")";
					$query = mysqli_query($conn,$query);

					if(!$query){die(mysqli_error($conn)); } else { header("Location:"."{$current_url}"."/register/login.php?success=true&{$email}");die(0); }
					mysqli_close($conn);

				}
		}

	}
	public function read($email){
		$user = "SELECT * FROM `users` WHERE  (`email`= {$email})";
		return $user;
	}

	public function update(){

	}

	public function delete(){

	}

	// Film IMITATION GAME watch mandatory

	public function login_user($email,$password){
		var_dump($password);

		if(isset($_POST['login'])){
			$usr = $this->read($email);
			var_dump($usr);
			$original_password = $usr->password;
			//$passwd = $password; chkirarel
			var_dump($email);
			if(hash_equals($password,hash('sha512',"{$original_password}"))) {
			// session_start();
			}

			$login_email = $_POST['input_email'];
			$login_password = $_POST['input_password'];

			if($login_email == "" || $login_password == ""){
				$email = ['email'=>''];
				$current_url= "{$_SERVER['REQUEST_SCHEME']}"."://"."{$_SERVER['HTTP_HOST']}";
				$attrs = http_build_query($email);
   				$redirect_to = htmlspecialchars("{$current_url}/register/login.php");
				header("Location:{$redirect_to}?{$attrs}");
			}else{

			}

		}

		/*$passwd = crypt('123456', 'XypD2++ S;@+-0_j<KOt/-+XOY($+cNf-|e;&t9.(;e*wG1/MC5)|X5W|MJ0z<i~');
		  var_dump($passwd == crypt('123456', crypt('123456', $passwd))); method1*/
		/* method2 -> hash_equals(); */
		/*$passwd = hash('sha256','123456');
		var_dump(hash_equals($passwd, hash('sha256','123456'))); method3 */
	}

}

class Vaidator{
	public $data;
	function __construct($data){
		$this->$data = $data;
	}

	public function name($name) {
		// name validation
		$name = $_POST['name'];
		$errors = [];
		$validated = false;
		if(isset($name) && $name):
			// katarvum a validacian
			// $regex = '/^/w{4,10}$/';
			$validated = true;

		else:
			// Empty field
			echo "name isn't typed";
		endif;

		if(empty($errors)):
			return true;
		else:
			return array(['errors']=>$errors);
		endif;
	}
	public function username($username) {
		// username validation
		$username = $_POST['username'];
		if(isset($username) && $username){
			// $regex = "";

		}

	}

	public function email() {
		// email validation
		$username = $_POST['username'];
		if(isset($username) && $username){
			// $regex = "";

		}
	}
	public function is_all_validated() {
		$name_validation = $this->name($data['name']);
		$email_validation = $this->email($data['email']);

		if(empty($name_validation)):

		endif;
	}


}