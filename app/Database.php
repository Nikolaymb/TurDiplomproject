<?
require_once __DIR__.'/../config.php';

class DataBase{
    
    function __construct(){

        global $DB;

        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"
        ];
    
        try{
            $this->db = new PDO("mysql:host=$DB[host];dbname=$DB[dbname]" . ';charset=utf8mb4', $DB['user'], $DB['pass'], $opt);
        }catch(PDOException $e){
            echo $e->getMessage();
		}
		
    }



/***************************************************************************/

public function Hotels($action, $other = null){

	$this->CreateTableHotels();

	switch($action){

		case 'CreateTableHotels':
			$this->CreateTableHotels();
			break;

		case 'InsertHotel':
			$this->InsertHotel($other['name'], $other['desc'], $other['price'], $other['map'], $other['img']);                
			break;

		case 'UpdateHotel':
			$this->UpdateHotel($other['name_f'], $other['name'], $other['desc'], $other['price'],$other['map'], $other['img']);
			break;

		case 'SelectHotelLimit':
			return $this->SelectHotelLimit($other['limit'], $other['search']);
			break;
		
			case 'DeleteHotel':
				return	$this->DeleteHotel($other['id_hl']);
				break;

	}

}

private function CreateTableHotels(){
	$this->db->query("CREATE TABLE IF NOT EXISTS `hotel_tur` (`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(100), `desc` VARCHAR(255), `price` INTEGER(11),`map` VARCHAR(5000), `img` VARCHAR(50), UNIQUE (`name`));");
}

private function SelectHotelLimit($limit = 0, $search = null){

	if(!empty($search)){
		$query = "SELECT * FROM `hotel_tur` WHERE CONCAT_WS('', `name`, `price`) LIKE '%$search%';";
	}else{
		if(!empty($limit)){
			$query = "SELECT * FROM `hotel_tur` LIMIT $limit;";
		}else{
			$query = "SELECT * FROM `hotel_tur`;";
		}
	}
	

	return $this->db->query($query)->fetchAll();
}







private function InsertHotel($name, $desc, $price,$map, $img){
	$this->db->query("INSERT INTO `hotel_tur` (`id`, `name`, `desc`, `price`, `map`, `img`) VALUES (NULL, '$name', '$desc', '$price', '$map', '$img')");
}

private function UpdateHotel($name_f, $name, $desc, $price,$map, $img){
	$this->db->query("UPDATE `hotel_tur` SET `name` = '$name', `desc` = '$desc', `price` = '$price',`map` = '$map', `img` = '$img' WHERE `name` = '$name_f'");
}

private function DeleteHotel($id_hl){
	$this->db->query("DELETE FROM `hotel_tur` WHERE `id` = $id_hl;");
}

/***************************************************************************/




















/****************************************************************************** */

public function Orders($action, $other = null){

	$this->CreateTableOrders();

	switch($action){

		case 'CreateTableOrders':
			$this->CreateTableOrders();
			break;

		case 'InsertOrder':
			$this->InsertOrder($other['name'], $other['desc'], $other['data'], $other['time'], $other['tur'], $other['hotel'],  $other['phone']);                
			break;

		case 'UpdateOrder':
			$this->UpdateOrder($other['name_f'], $other['name'], $other['desc'], $other['data'], $other['time'],$other['tur'], $other['hotel'], $other['phone'] );
			break;

		case 'SelectOrderLimit':
			return $this->SelectOrderLimit($other['limit'], $other['search']);
			break;

		case 'DeleteOrder':
			return	$this->DeleteOrder($other['id_or']);
			break;


	}

}



private function CreateTableOrders(){
	$this->db->query("CREATE TABLE IF NOT EXISTS `order_tur` (`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(100), `desc` VARCHAR(255), `tur` VARCHAR(100),`hotel` VARCHAR(100), `data` DATE, `time` TIME,`phone` VARCHAR(13), UNIQUE (`name`));");
}

private function SelectOrderLimit($limit = 0, $search = null){

	if(!empty($search)){
		$query = "SELECT * FROM `order_tur` WHERE `name` LIKE '%$search%';";
	}else{
		if(!empty($limit)){
			$query = "SELECT * FROM `order_tur` LIMIT $limit;";
		}else{
			$query = "SELECT * FROM `order_tur`;";
		}
	}

	return $this->db->query($query)->fetchAll();
}

private function InsertOrder($name, $desc, $data, $time, $tur, $hotel , $phone){
	$this->db->query("INSERT INTO `order_tur` (`id`, `name`, `desc`,`tur`,`hotel`, `data`, `time`, `phone`) VALUES (NULL, '$name', '$desc', '$tur','$hotel','$data','$time',$phone)");
}

private function UpdateOrder($name_f, $name, $desc, $data, $time, $tur, $hotel,$phone){
	$this->db->query("UPDATE `order_tur` SET `name` = '$name', `desc` = '$desc', `tur` = '$tur' ,`hotel` = '$hotel' , `data` = '$data', `time` = '$time', `phone` = '$phone' WHERE `name` = '$name_f'");
}

private function DeleteOrder($id_or){
	$this->db->query("DELETE FROM `order_tur` WHERE `id` = $id_or;");
}







    /*****************************************************************************/

    public function Users($action, $other = null){

		$this->CreateTableUsers();

        switch($action){

            case 'CreateTableUsers':
                $this->CreateTableUsers(); 
                break;

            case 'InsertUser':
                $this->InsertUser($other['login'], $other['password'], $other['name'], $other['img']);                
                break;

            case 'UpdateUser':
                $this->UpdateUser($other['login_f'], $other['login'], $other['password'], $other['name'], $other['img']);
                break;

            case 'SelectUser':
                return $this->SelectUser($other['login'], $other['password']);
				break;
				
			case 'SelectUsersLimit':
                return $this->SelectUsersLimit($other['limit']);
                break;

        }

    }
    
    private function CreateTableUsers(){
        $this->db->query("CREATE TABLE IF NOT EXISTS `users_tur` (`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, `login` VARCHAR(100), `pass` INTEGER(200), `name` VARCHAR(200), `img` VARCHAR(100),  UNIQUE (`login`));");
	}

	private function SelectUser($login, $password){
        return $this->db->query("SELECT * FROM `users_tur` WHERE `login` = '$login' AND `pass` = '$password';")->fetchAll()[0];
	}

	private function SelectUsersLimit($limit = 0){
		
		if(!empty($limit)){
			$query = "SELECT * FROM `users_tur` LIMIT $limit;";
		}else{
			$query = "SELECT * FROM `users_tur`;";
		}

        return $this->db->query($query)->fetchAll();
	}

	private function InsertUser($login, $password, $name, $img){
       	$this->db->query("INSERT INTO `users_tur` VALUE ('', '$login', '$password', '$name', '$img')");
	}

	private function UpdateUser($login_f, $login, $password, $name, $img){

		if(!empty($password)){
			$this->db->query("UPDATE `users_tur` SET `login` = '$login', `pass` = '$password', `name` = '$name', `img` = '$img' WHERE `login` = '$login_f'");
		}else{
			$this->db->query("UPDATE `users_tur` SET `login` = '$login', `name` = '$name', `img` = '$img' WHERE `login` = '$login_f'");
		}
	}
	 
	/***************************************************************************/

	public function Attractions($action, $other = null){

		$this->CreateTableAttractions();

        switch($action){

            case 'CreateTableAttractions':
                $this->CreateTableAttractions();
                break;

            case 'InsertAttraction':
                $this->InsertAttraction($other['name'], $other['desc'], $other['price'], $other['map'], $other['img']);                
                break;

            case 'UpdateAttraction':
                $this->UpdateAttraction($other['name_f'], $other['name'], $other['desc'], $other['price'],$other['map'], $other['img']);
                break;

            case 'SelectAttractionLimit':
                return $this->SelectAttractionLimit($other['limit'], $other['search']);
				break;

			case 'DeleteAttraction':
				return	$this->DeleteAttraction($other['id_attr']);
				break;

        }

    }
    
    private function CreateTableAttractions(){
        $this->db->query("CREATE TABLE IF NOT EXISTS `attractions_tur` (`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(100), `desc` VARCHAR(255), `price` INTEGER(11),`map` VARCHAR(5000), `img` VARCHAR(50), UNIQUE (`name`));");
	}

	private function SelectAttractionLimit($limit = 0, $search = null){

		if(!empty($search)){
			$query = "SELECT * FROM `attractions_tur` WHERE `name` LIKE '%$search%';";
		}else{
			if(!empty($limit)){
				$query = "SELECT * FROM `attractions_tur` LIMIT $limit;";
			}else{
				$query = "SELECT * FROM `attractions_tur`;";
			}
		}

        return $this->db->query($query)->fetchAll();
	}

	private function InsertAttraction($name, $desc, $price,$map, $img){
		$this->db->query("INSERT INTO `attractions_tur` (`id`, `name`, `desc`, `price`, `map`, `img`) VALUES (NULL, '$name', '$desc', '$price', '$map', '$img')");
	}

	private function UpdateAttraction($name_f, $name, $desc, $price,$map, $img){
		$this->db->query("UPDATE `attractions_tur` SET `name` = '$name', `desc` = '$desc', `price` = '$price',`map` = '$map', `img` = '$img' WHERE `name` = '$name_f'");
	}

	private function DeleteAttraction($id_attr){
		$this->db->query("DELETE FROM `attractions_tur` WHERE `id` = $id_attr;");
	}



	/***************************************************************************/

	public function Turs($action, $other = null){

		$this->CreateTableTurs();

        switch($action){

            case 'CreateTableTurs':
                $this->CreateTableTurs();
                break;

            case 'InsertTur':
                $this->InsertTur($other['name'],$other['country'],$other['desc'],$other['cost'],$other['img']);                
                break;

            case 'UpdateTur':
                $this->UpdateTur($other['name_f'], $other['name'],$other['country'],$other['desc'],$other['cost'],$other['img']);
                break;

            case 'SelectTurLimit':
                return $this->SelectTurLimit($other['limit'], $other['search']);
				break;

			case 'AddAttractionTur':
                return $this->AddAttractionTur($other['id_cm'], $other['id_attraction']);
				break;

			case 'AddHotelTur':
				return $this->AddHotelTur($other['id_cm'], $other['id_hotel']);
				break;
	
            case 'DeleteTur':
				return	$this->DeleteTur($other['id_cm']);
				break;




        }

    }
    
    private function CreateTableTurs(){
        $this->db->query("CREATE TABLE IF NOT EXISTS `name_tur` (`id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(100),`country` VARCHAR(100),`desc` VARCHAR(255),`cost` int(8),`img` VARCHAR(200), `id_attractions` VARCHAR(50),`id_hotel` VARCHAR(50), UNIQUE (`name`));");
	}

	private function SelectTurLimit($limit = 0, $search = null){

		//*
		if(!empty($search)){
			$query = "SELECT * FROM `name_tur` WHERE CONCAT_WS('', `name`, `country`,`cost`)  LIKE '%$search%';";
		}else{
			if(!empty($limit)){
				$query = "SELECT * FROM `name_tur` LIMIT $limit;";
			}else{
				$query = "SELECT * FROM `name_tur`;";
			}
		}

		$return = $this->db->query($query)->fetchAll();

	



		//Add Attractions and Workers
		for($i = 0; $i < count($return); $i++){

			

			if(!empty($return[$i]['id_attractions'])){

				$products = explode(',', $return[$i]['id_attractions']);

				for($a = 0; $a < count($products); $a++){
					$return[$i]['attraction'][$a] = $this->db->query("SELECT * FROM `attractions_tur` WHERE `id` = '$products[$a]'")->fetchAll()[0];
				}

			}

			if(!empty($return[$i]['id_hotel'])){

				$products = explode(',', $return[$i]['id_hotel']);

				for($a = 0; $a < count($products); $a++){
					$return[$i]['hotel'][$a] = $this->db->query("SELECT * FROM `hotel_tur` WHERE `id` = '$products[$a]'")->fetchAll()[0];
				}

			}

			
		}

        return $return;
	}

	private function InsertTur($name,$country, $desc, $cost, $img){
		$this->db->query("INSERT INTO `name_tur` (`id`, `name`,`country`, `desc`,`cost`, `img`) VALUES (NULL, '$name','$country', '$desc','$cost', '$img')");
	}

	private function UpdateTur($name_f, $name,$country, $desc, $cost, $img){
		$this->db->query("UPDATE `name_tur` SET `name` = '$name',`country` = '$country', `desc` = '$desc',`cost` = '$cost', `img` = '$img' WHERE `name` = '$name_f'");
	}

	private function DeleteTur($id_cm){
		
		$this->db->query("DELETE FROM `name_tur` WHERE `id` = $id_cm;");
	}



	private function AddAttractionTur($id_cm, $id_prod){

		$products = $this->db->query("SELECT `id_attractions` FROM `name_tur` WHERE `id` = '$id_cm'")->fetchAll()[0]['id_attractions'];

		if(!empty($products)){
			$products .= ",$id_prod";
		}else{
			$products = $id_prod;
		}

		$this->db->query("UPDATE `name_tur` SET `id_attractions` = '$products' WHERE `id` = '$id_cm'");
	}

	
	private function AddHotelTur($id_cm, $id_prod){

		$products = $this->db->query("SELECT `id_hotel` FROM `name_tur` WHERE `id` = '$id_cm'")->fetchAll()[0]['id_hotel'];

		if(!empty($products)){
			$products .= ",$id_prod";
		}else{
			$products = $id_prod;
		}

		$this->db->query("UPDATE `name_tur` SET `id_hotel` = '$products' WHERE `id` = '$id_cm'");
	}


	
	



	
	
	
	
	


}


/***************************************************************************/

   