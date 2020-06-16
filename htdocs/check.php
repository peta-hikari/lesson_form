<?php

    include '../model/setData.php';
    include '../model/checkErrors.php';
    $setdata= new setData;
    $checkerrors = new checkErrors;
    //$pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";

    $errors = [];

    $input_info['name']   = $setdata->setData($_POST['name']);
    $input_info['maile']  = $setdata->setData($_POST['maile']);
    $input_info['main']   = $setdata->setData($_POST['main']);
    $input_info['job']    = $setdata->setData($_POST['job']);
    $input_info['gender'] = $setdata->setData($_POST['gender']);
    $input_info['check']  = $setdata->setData($_POST['check']);

    $errors = $checkerrors->checkErrors($input_info);

    if(empty($errors)) {
        include '../view/check_html.php';
        exit();
    }

    include '../view/index_html.php';
    exit();


    /*if(empty($input_info['name'])){
        $errors['name'] = 'name miss ';
    }
    if(empty($input_info['maile']) || !preg_match($pattern, $input_info['maile'])){
        $errors['maile'] = 'maile miss ';
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
    if(isset($_POST['maile'])){
        $input_maile = $_POST['maile'];
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
    if(empty($input_maile) || !preg_match($pattern, $input_maile)){
        $errors['maile'] = 'maile miss ';
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
