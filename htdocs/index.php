<?php

    include '../model/setData.php';
    $setdata     = new SetData;
    $input_info =[];

    $input_items = $setdata->getInputitems();

    foreach($input_items as $key){
        if(isset($_POST[$key])){
            $setdata->setInputdata($_POST[$key], $key);
        }
    }
    $input_info = $setdata->getInputdata();


    include '../view/index_html.php';
