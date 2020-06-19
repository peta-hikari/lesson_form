<?php
    include '../model/outputCSV.php';
    include '../model/checkErrors.php';
    include '../model/setData.php';
    $outputcsv = new OutputCSV;
    $checkerrors = new CheckErrors;
    $setdata     = new SetData;
    $input_info = [];
    $errors = [];

    $input_data = ['name', 'mail', 'main','job', 'gender', 'check'];

    foreach($input_data as $key){
        $setdata->setInputdata($_POST[$key], $key);
    }
    $input_info = $setdata->getInputdata();

    $errors = $checkerrors->checkDataerrors($input_info);
    if(!$checkerrors->emptyErrors($errors)) {
        include '../view/index_html.php';
        exit();
    }

    $outputcsv->outputDataCSV($input_info);
    include '../view/complete_html.php';