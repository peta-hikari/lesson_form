<?php

class checkErrors {

    /*
     * @ver array
     */
    public $errors = [];

    /*
     * @ver string
     */
    protected $pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";

    /*
     * @param array $input_info
     * @return array
     */
    public function checkErrors($input_info = []){
        foreach($input_info as $key => $data){
            if(empty($data)){
               $this->errors[$key] = "$key miss";
            }
            if($key == 'maile'){
                $this->checkMaile($data);
            }
        }
        return $this->errors;
    }

    /*
     * @param array $data
     * @return void
     */
    protected function checkMaile($data){
        if(!preg_match($this->pattern, $data)){
            $this->errors['maile'] = "maile miss";
        }
    }

}