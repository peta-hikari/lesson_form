<?php

    include '../model/setData.php';
    include '../model/checkErrors.php';
    include '../model/setOutputdata.php';
    include '../model/OutputCSV.php';

    $setdata     = new SetData;
    $checkerrors = new CheckErrors;
    $outputdata  = new SetOutputdata;
    $outputcsv   = new OutputCSV;
    $errors = [];
    $output_info = [];

    if (empty($_SERVER["HTTP_REFERER"])) {
        header('Location:  http://localhost:8000/');
    }

    $input_info['name']   = $setdata->setInputdata($_POST['name']);
    $input_info['mail']   = $setdata->setInputdata($_POST['mail']);
    $input_info['main']   = $setdata->setInputdata($_POST['main']);
    $input_info['job']    = $setdata->setInputdata($_POST['job']);
    $input_info['gender'] = $setdata->setInputdata($_POST['gender']);
    $input_info['check']  = $setdata->setInputdata($_POST['check']);

    $errors = $checkerrors->checkDataerrors($input_info);
    if(!$checkerrors->emptyErrors($errors)) {
        include '../view/index_html.php';
        exit();
    }

    $output_info = $outputdata->setOutputdatas($input_info);
    $outputcsv->outputDataCSV($input_info);
    include '../view/check_html.php';
    exit();


       // header('Location: http://localhost:8888/');
       // exit();_*/
