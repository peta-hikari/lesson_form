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

    $input_items = $setdata->getInputitems();

   foreach($input_items as $key){
        $setdata->setInputdata($_POST[$key], $key);
    }
    $input_info = $setdata->getInputdata();

    //$errors = $checkerrors->checkDataerrors($input_info);
    if(!$checkerrors->checkDataerrors($input_info)) {
        $errors = $checkerrors->getErrors();
        include '../view/index_html.php';
        exit();
    }

    $inputdb->saveDbPostData($input_info);
    $outputcsv->outputDataCSV($input_info);
    include '../view/complete_html.php';