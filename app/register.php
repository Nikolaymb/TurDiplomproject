<?

require_once 'Database.php';
require_once __DIR__.'/../config.php';

if(!empty($_POST['login']) && !empty($_POST['name'])  && !empty($_POST['password'])  && !empty($_POST['img']) && empty($_SESSION['id'])){

	$DB = new Database;

	$tmp['name'] = $_POST['name'];

	$tmp['login'] = $_POST['login'];
	$tmp['password'] = md5($_POST['password'].'/*526-=-2');

	$tmp['img'] = $_POST['img']; 

	$DB->Users('InsertUser', $tmp);

	ini_set('session.gc_maxlifetime', 1209600);
	ini_set('session.cookie_lifetime', 1209600);

	session_start();
	
	$_SESSION['img'] = $tmp['img'];

	$_SESSION['login'] = $tmp['login'];
	$_SESSION['name'] = $tmp['name'];
	

	global $login_admin;

	if($_SESSION['login'] == $login_admin){
		$_SESSION['admin'] = true;
	}
	global $login_manager;

	if($_SESSION['login'] == $login_manager){
		$_SESSION['manager'] = true;
	}



	header('Location: /');
}