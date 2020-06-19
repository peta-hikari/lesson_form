<?php
    include '../model/outputCSV.php';
    include '../model/checkErrors.php';
    include '../model/setData.php';
    include '../model/inputDB.php';
    $outputcsv   = new OutputCSV;
    $checkerrors = new CheckErrors;
    $setdata     = new SetData;
    $inputdb     = new InputDB;
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

    //Var_dump($input_info['check']);
    $inputdb->saveDbPostData($input_info);
    $outputcsv->outputDataCSV($input_info);
    include '../view/complete_html.php';