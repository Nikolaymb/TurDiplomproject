<?
require_once __DIR__.'/../Database.php';
require_once __DIR__.'/../../config.php';

function model_manager(){

	$DB = new Database;

	

	$tmp['limit'] = 0;
	$result['clients'] = $DB->Users('SelectUsersLimit', $tmp);

	$tmp['limit'] = 0;
	$result['orders'] = $DB->Orders('SelectOrderLimit', $tmp);


	return $result;
}