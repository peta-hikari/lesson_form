<?php
    include '../model/OutputCSV.php';
    include '../model/setData.php';
    $setdata   = new SetData;
    $outputcsv = new OutputCSV;

    //$input_info = $setdata->getInputdata();
    //$outputcsv->outputDataCSV($input_info);
    include '../view/complete_html.php';