<?php
include '../model/inputDB.php';
include '../model/outputCSV.php';
$outputcsv   = new OutputCSV;
$inputdb     = new InputDB;

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=Contact_data.csv");
header("Content-Transfer-Encoding: binary");

$csv_data = $outputcsv->dlFile($inputdb->getDbData());
mb_convert_variables('SJIS-win', 'UTF-8', $csv_data);
echo $csv_data;