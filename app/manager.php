<?

require_once 'Database.php';
require_once __DIR__.'/../config.php';

session_start(); 

if($_SESSION['manager'] == true){

	 

		if(!empty($_POST['login_f']) && !empty($_POST['login']) && !empty($_POST['img']) && !empty($_POST['name'])){

			$DB = new Database;
		
			$tmp['login_f'] = $_POST['login_f'];
			$tmp['login'] = $_POST['login'];
			if(!empty($_POST['password'])){
				$tmp['password'] = md5($_POST['password'].'/*526-=-2');
			}
			$tmp['name'] = $_POST['name'];
			$tmp['img'] = $_POST['img'];
			$DB->Users('UpdateUser', $tmp);

			return header('Location: /page/manager.php');
		
		}else if(!empty($_POST['name_f']) && !empty($_POST['name']) && !empty($_POST['desc']) ){

			$DB = new Database;
			$tmp['name_f'] = $_POST['name_f'];
			$tmp['name'] = $_POST['name'];
			$tmp['desc'] = $_POST['desc'];
			$tmp['tur'] = $_POST['tur'];
			$tmp['hotel'] = $_POST['hotel'];
			$tmp['data'] = $_POST['data'];
			$tmp['time'] = $_POST['time'];
			$tmp['phone'] = $_POST['phone'];
			$DB->Orders('UpdateOrder', $tmp);

			return header('Location: /page/manager.php');
		
		}else if(!empty($_POST['type']) && $_POST['type'] == 'dl_or' ){

			$DB = new Database;
		
		
			$tmp['id_or'] = $_POST['id_or'];
		
			$DB->Orders('DeleteOrder', $tmp);
	
			return header('Location: /page/manager.php');
	
		}

	
	}

	



header('Location: /');