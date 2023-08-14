<?

require_once 'Database.php';
require_once __DIR__.'/../config.php';


if(!empty($_POST['type']) && $_POST['type'] == 'add' && !empty($_POST['name']) ){

    $DB = new Database;

    $tmp['name'] = $_POST['name'];
    $tmp['desc'] = $_POST['desc'];
    $tmp['tur'] = $_POST['tur'];
    $tmp['hotel'] = $_POST['hotel'];
    $tmp['data'] = $_POST['data'];
    $tmp['time'] = $_POST['time'];
    $tmp['phone'] = $_POST['phone'];
  

    $DB->Orders('InsertOrder', $tmp);

    return header('Location: /appoinment.php');

}