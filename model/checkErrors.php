<?php

class checkErrors {

    public $errors = [];

    public function checkErrors($input_info){

        foreach($input_info as $key => $data){
            if(empty($input)){
                $this->erroes[$key] = "$key miss";
            }
        }
        return $this->errors;

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
        }*/
    }

}