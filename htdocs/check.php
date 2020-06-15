<?php

    //$infomation = new setData;
    //$infomation -> setData($_POST['name'], $_POST['maile'], $_POST['main'], $_POST['job'], $_POST['gender'], $_POST['check']);

    $pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";

    $errors = [];

    if(isset($_POST['name'])){
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
    }


    if(empty($input_name)){
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
    }

    include '../view/index_html.php';
    exit();

       // header('Location: http://localhost:8888/');
       // exit();


    /*if( !preg_match($pattern, $input_maile)){

        include '../view/index_html.php';
        exit();
    }*/

    //include '../view/check_html.php';