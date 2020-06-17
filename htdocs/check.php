<?php

    include '../model/setData.php';
    include '../model/checkErrors.php';
    include '../model/setOutputdata.php';

    $setdata= new setData;
    $checkerrors = new checkErrors;
    $outputdata = new setOutputdata;
    $errors = [];
    $output_info = [];

    if (empty($_SERVER["HTTP_REFERER"])) {
        header('Location:  http://localhost:8000/');
    }

    $input_info['name']   = $setdata->setData_2($_POST['name']);
    $input_info['mail']   = $setdata->setData_2($_POST['mail']);
    $input_info['main']   = $setdata->setData_2($_POST['main']);
    $input_info['job']    = $setdata->setData_2($_POST['job']);
    $input_info['gender'] = $setdata->setData_2($_POST['gender']);
    $input_info['check']  = $setdata->setData_2($_POST['check']);

    $errors = $checkerrors->checkErrors($input_info);
    if(empty($errors)) {
        $output_info = $outputdata->setOutputdata($input_info);
        include '../view/check_html.php';
        exit();
    }

    include '../view/index_html.php';
    exit();

    //$pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    /*if(empty($input_info['name'])){
        $errors['name'] = 'name miss ';
    }
    if(empty($input_info['mail']) || !preg_match($pattern, $input_info['mail'])){
        $errors['mail'] = 'mail miss ';
    }
    if(empty($input_info['main'])){
        $errors['main'] = 'main miss ';
    }
    if(empty($input_info['check'])){
        $errors['check'] = 'please check ';
    }*/

   /* if(isset($_POST['name'])){
        $input_name = $_POST['name'];
    }
    if(isset($_POST['mail'])){
        $input_mail = $_POST['mail'];
    }
    if(isset($_POST['main'])){
        $input_main = $_POST['main'];
    }
    if(isset($_POST['job'])){
        $input_job = $_POST['job'];
    }
    if(isset($_POST['gender'])){
        $input_sei =$_POST['gender'];
    }
    if(isset($_POST['check'])){
        $input_check = $_POST['check'];
    }*/

    /*if(empty($input_name)){
        $errors['name'] = 'name miss ';
    }
    if(empty($input_mail) || !preg_match($pattern, $input_mail)){
        $errors['mail'] = 'mail miss ';
    }
    if(empty($input_main)){
        $errors['main'] = 'main miss ';
    }
    if(empty($input_check)){
        $errors['check'] = 'please check ';
    }
    if(empty($errors)) {
        include '../view/check_html.php';
        exit();
    }*/

       // header('Location: http://localhost:8888/');
       // exit();_*/
