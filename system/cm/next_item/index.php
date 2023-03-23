<?php

/*include_once($_SERVER['DOCUMENT_ROOT'] . '/system/cm/tm.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/index.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/model/PG_insight.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/model/PG_elaboration.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/model/PG_demo_el.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/system/log/log.php');*/
//require($_SERVER['DOCUMENT_ROOT'] . '/geo_chart/vendor/autoload.php');
require($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
//require_once __DIR__ . 'vendor/autoload.php';


//$welcome = new NAD();
//==$tm = new TM();
//$pg_insight = new PG_insight();
//$pg_videme = new PostgreSQL();
//$pg_elaboration = new PG_demo_el();
//$pg_elaboration = new PG_elaboration();

//$log = new log();

echo 'by root';

use VideMe\Datacraft\tm;
use VideMe\Datacraft\log\log;
use VideMe\Datacraft\model\PG_elaboration;
//use VideMe\Datacraft\model\PostgreSQL;

//$tm = new VideMe\Datacraft\TM();
$tm = new TM();
$log = new log();
$pg_elaboration = new PG_elaboration();

//$welcome = new VideMe\Datacraft\TM();

//error_reporting(0); // Turn off error reporting
error_reporting(E_ALL ^ E_DEPRECATED); // Report all errors


$res_item_id = $pg_elaboration->pgGetItemForTM_OLD($tm->getFallDaysMaxHighty());
if (!empty($res_item_id)) {
    $welcome->outputDDBData($res_item_id);
} else {
    header("HTTP/1.0 404 Not Found");
}