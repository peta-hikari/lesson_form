<?php
    include '../model/outputCSV.php';
    include '../model/setData.php';
    $setdata   = new SetData;
    $outputcsv = new OutputCSV;
    $input_info = [];

    $input_info = $_POST['input_csv'];
    $outputcsv->outputDataCSV($input_info);
    include '../view/complete_html.php';