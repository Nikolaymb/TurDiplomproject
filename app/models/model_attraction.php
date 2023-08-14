<?

require_once __DIR__.'/../Database.php';
require_once __DIR__.'/../../config.php';

function model_attraction($search = null){

	$DB = new Database;

	$tmp['limit'] = 0;
	$tmp['search'] = $search;

	$result['attraction'] = $DB->Attractions('SelectAttractionLimit', $tmp);

	return $result;
}