<?php

    include '../model/setData.php';
    $setdata     = new SetData;
    $input_info =[];

    $input_data = ['name', 'mail', 'main','job', 'gender', 'check'];

    foreach($input_data as $key){
        if(isset($_POST[$key])){
            $setdata->setInputdata($_POST[$key], $key);
        }
    }
    $input_info = $setdata->getInputdata();


    include '../view/index_html.php';
