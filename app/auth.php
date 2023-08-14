<?

require_once 'Database.php';
require_once __DIR__.'/../config.php';

if(!empty($_POST['login']) && !empty($_POST['password'])  && empty($_SESSION['id'])){

	$DB = new Database;

	$tmp['login'] = $_POST['login'];
	$tmp['password'] = md5($_POST['password'].'/*526-=-2');

	$user = $DB->Users('SelectUser', $tmp);

	if(!empty($user['id'])){

		ini_set('session.gc_maxlifetime', 1209600);
		ini_set('session.cookie_lifetime', 1209600);

		session_start();

		$_SESSION['name'] = $user['name'];
		$_SESSION['login'] = $user['login'];
		$_SESSION['img'] = $user['img'];
	

		global $login_admin;

		if($_SESSION['login'] == $login_admin){
			$_SESSION['admin'] = true;
		}

		global $login_manager;

		if($_SESSION['login'] == $login_manager){
			$_SESSION['manager'] = true;
		}



	}

	header('Location: /');
}