<?php

//include_once($_SERVER['DOCUMENT_ROOT'] . '/nad/index.php');
require($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

//error_reporting(0); // Turn off error reporting
error_reporting(E_ALL ^ E_DEPRECATED); // Report all errors

use VideMe\Datacraft\TM;
use VideMe\Datacraft\log\log;
use VideMe\Datacraft\model\PG_elaboration;
//use VideMe\Datacraft\model\PostgreSQL;
//use VideMe\Datacraft\index;


//$tm = new VideMe\Datacraft\TM();
$tm = new TM();
$log = new log();
$welcome = new NAD();
//if ()
$pgShowChartByItem1stDays['item_id'] = $_REQUEST['item'] ?? null;;
/*$pgShowChartByItem1stDays['d_start'] = $_REQUEST['d_start'] ?? null;;
$pgShowChartByItem1stDays['d_stop'] = $_REQUEST['d_stop'] ?? null;;
$pgShowChartByItem1stDays['w_start'] = $_REQUEST['w_start'] ?? null;;
$pgShowChartByItem1stDays['w_stop'] = $_REQUEST['w_stop'] ?? null;;
$pgShowChartByItem1stDays['m_start'] = $_REQUEST['m_start'] ?? null;;
$pgShowChartByItem1stDays['m_stop'] = $_REQUEST['m_stop'] ?? null;;
$pgShowChartByItem1stDays['state'] = $_REQUEST['state'] ?? null;;*/
$pgShowChartByItem1stDays['limit'] = $welcome->setLimit();

//print_r($pgShowChartByItem1stDays);
//exit();

if (!empty($pgShowChartByItem1stDays['item_id'])) {
    //$welcome->outputDDBData($welcome->pgShowChartByItem1stDays(['item_id' => $_REQUEST['item'], 'days' => $_REQUEST['days']]));
    $welcome->outputDDBData($welcome->pgChartGetPopState($pgShowChartByItem1stDays));
} else {
    header("HTTP/1.0 404 Not Found");
}