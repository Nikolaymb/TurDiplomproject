<?
require_once __DIR__.'/../Database.php';
require_once __DIR__.'/../../config.php';

function model_admin(){

	$DB = new Database;

	$tmp['limit'] = 0;
	$result['attraction'] = $DB->Attractions('SelectAttractionLimit', $tmp);

	$tmp['limit'] = 0;
	$result['hotel'] = $DB->Hotels('SelectHotelLimit', $tmp);



	$tmp['limit'] = 0;
	$result['clients'] = $DB->Users('SelectUsersLimit', $tmp);

	return $result;
}