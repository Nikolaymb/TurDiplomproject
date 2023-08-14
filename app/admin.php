<?

require_once 'Database.php';
require_once __DIR__.'/../config.php';

session_start(); 

if($_SESSION['admin'] == true){

	if(!empty($_POST['type']) && $_POST['type'] == 'add' && !empty($_POST['name']) && !empty($_POST['price']) && is_numeric($_POST['price']) && !empty($_POST['map']) && !empty($_POST['img'])){

		$DB = new Database;
	
		$tmp['name'] = $_POST['name'];
		$tmp['desc'] = $_POST['desc'];
		$tmp['price'] = $_POST['price'];
		$tmp['map'] = $_POST['map'];
		$tmp['img'] = $_POST['img'];
		$tmp['id_cm'] = $_POST['id_cm'];
	
		$DB->Attractions('InsertAttraction', $tmp);

		return header('Location: /page/admin.php');

	}else if(!empty($_POST['type']) && $_POST['type'] == 'add_cm' && !empty($_POST['name']) && !empty($_POST['country']) && !empty($_POST['desc'])&& !empty($_POST['cost']) && is_numeric($_POST['cost']) && !empty($_POST['img'])){

		$DB = new Database;
	
		$tmp['name'] = $_POST['name'];
		$tmp['country'] = $_POST['country'];
		$tmp['desc'] = $_POST['desc'];
		$tmp['cost'] = $_POST['cost'];
		$tmp['img'] = $_POST['img'];
	
		$DB->Turs('InsertTur', $tmp);

		return header('Location: /maptur.php');

	}else if(!empty($_POST['type']) && $_POST['type'] == 'add_prod' && !empty($_POST['id_cm']) && !empty($_POST['id_prod'])){

		$DB = new Database;
	
		$tmp['id_cm'] = $_POST['id_cm'];
		$tmp['id_attraction'] = $_POST['id_prod'];
	
		$DB->Turs('AddAttractionTur', $tmp);

		return header('Location: /maptur.php');

	}
	else if(!empty($_POST['type']) && $_POST['type'] == 'add_hl' && !empty($_POST['id_cm']) && !empty($_POST['id_prod'])){

		$DB = new Database;
	
		$tmp['id_cm'] = $_POST['id_cm'];
		$tmp['id_hotel'] = $_POST['id_prod'];
	
		$DB->Turs('AddHotelTur', $tmp);

		return header('Location: /maptur.php');

	}
	
	
	else{

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

			return header('Location: /page/admin.php');
		
		}else if(!empty($_POST['name_f']) && !empty($_POST['name']) && !empty($_POST['price']) && is_numeric($_POST['price']) && !empty($_POST['map']) && !empty($_POST['img'])){
		
			$DB = new Database;
		
			$tmp['name_f'] = $_POST['name_f'];
			$tmp['name'] = $_POST['name'];
			$tmp['desc'] = $_POST['desc'];
			$tmp['price'] = $_POST['price'];
			$tmp['map'] = $_POST['map'];
			$tmp['img'] = $_POST['img'];
			$tmp['id_cm'] = $_POST['id_cm'];
		
			$DB->Attractions('UpdateAttraction', $tmp);

			return header('Location: /page/admin.php');
		
		}else if(!empty($_POST['type']) && $_POST['type'] == 'dl_tur' ){

			$DB = new Database;
		
		
			$tmp['id_cm'] = $_POST['id_cm'];
		
			$DB->Turs('DeleteTur', $tmp);
	
			return header('Location: /page/admin.php');

		}else if(!empty($_POST['type']) && $_POST['type'] == 'dl_hl' ){

			$DB = new Database;
		
		
			$tmp['id_hl'] = $_POST['id_hl'];
		
			$DB->Hotels('DeleteHotel', $tmp);
	
			return header('Location: /page/admin.php');

		}else if(!empty($_POST['type']) && $_POST['type'] == 'dl_attr' ){

			$DB = new Database;
		
		
			$tmp['id_attr'] = $_POST['id_attr'];
		
			$DB->Attractions('DeleteAttraction', $tmp);
	
			return header('Location: /page/admin.php');

		}

		else if(!empty($_POST['type']) && $_POST['type'] == 'add_h' && !empty($_POST['name']) && !empty($_POST['price']) && is_numeric($_POST['price']) && !empty($_POST['map']) && !empty($_POST['img'])){

			$DB = new Database;
		
			$tmp['name'] = $_POST['name'];
			$tmp['desc'] = $_POST['desc'];
			$tmp['price'] = $_POST['price'];
			$tmp['map'] = $_POST['map'];
			$tmp['img'] = $_POST['img'];
			$tmp['id_cm'] = $_POST['id_cm'];
		
			$DB->Hotels('InsertHotel', $tmp);
	
			return header('Location: /page/admin.php');
		
		

			
		
		}
		else if(!empty($_POST['name_f']) && !empty($_POST['name']) && !empty($_POST['price']) && is_numeric($_POST['price']) && !empty($_POST['map']) && !empty($_POST['img'])){
		
			$DB = new Database;
		
			$tmp['name_f'] = $_POST['name_f'];
			$tmp['name'] = $_POST['name'];
			$tmp['desc'] = $_POST['desc'];
			$tmp['price'] = $_POST['price'];
			$tmp['map'] = $_POST['map'];
			$tmp['img'] = $_POST['img'];
			
		
			$DB->Hotels('UpdateHotel', $tmp);

			return header('Location: /page/admin.php');
		
		}




	}

	
}


header('Location: /');