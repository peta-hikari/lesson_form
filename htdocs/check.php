<?php

    include '../model/setData.php';
    include '../model/checkErrors.php';
    include '../model/setOutputdata.php';

    $setdata     = new SetData;
    $checkerrors = new CheckErrors;
    $outputdata  = new SetOutputdata;

    $errors = [];
    $output_info = [];

    if (empty($_SERVER["HTTP_REFERER"])) {
        header('Location:  http://localhost:8000/');
    }

    $setdata->setInputdata($_POST['name'], 'name');
    $setdata->setInputdata($_POST['mail'], 'mail');
    $setdata->setInputdata($_POST['main'], 'main');
    $setdata->setInputdata($_POST['job'], 'job');
    $setdata->setInputdata($_POST['gender'], 'gender');
    $setdata->setInputdata($_POST['check'], 'check');

    $input_info = $setdata->getInputdata();

    //echo $checkerrors->checkDataerrors($input_info);
    //exit();

    if(! $checkerrors->checkDataerrors($input_info)) {
        $errors = $checkerrors->getErrors();
        include '../view/index_html.php';
        exit();
    }

    $output_info = $outputdata->setOutputdatas($input_info);
    include '../view/check_html.php';
    exit();


       // header('Location: http://localhost:8888/');
       // exit();_*/
