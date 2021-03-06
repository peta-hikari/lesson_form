<?php

class CheckErrors {

    /*
     * @ver array
     */
    public $errors = [];

    protected $data_validation=[
                  'name'   => 'Length|Ban|Empty',
                  'mail'   => 'Length|Mail|Empty',
                  'main'   => 'Ban|Length|Empty',
                  'job'    => 'Job',
                  'gender' => 'Gender',
                  'check'  => 'Check|Empty'
              ];

    protected $errors_empty = [
                "name"   => '未入力です。名前を入力してください。',
                "mail"  => '未入力です。メールアドレスを入力してください。',
                "main"   => '未入力です。お問い合わせ内容を入力してください。',
                "job"    => '業種を選択してください。',
                "gender" => '',
                "check"  => 'お問い合わせには同意していただく必要があります。'
              ];

    protected $errors_length = [
                "name"   => 10,
                "mail"  => 50,
                "main"   => 400,
                "job"    => 10,
                "gender" => 10,
                "check"  => 10
              ];

    protected $job_array    = ['SE', '営業'];
    protected $gender_array = ['M', 'F'];
    protected $check_value  = 'on';

    /*
     * @ver string
     */
    protected $mail_pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    protected $char_pattern  = '/[\*\+\?\{\}\(\)\[\]\^\$\|\/\-\"\']/';

    /*
     * @param array $input_info
     * @return bool
     */
    /*public function checkDataerrors($input_info){
        foreach($input_info as $key => $data){
            if(empty($data)){
                $this->checkEmpty($key);
            } else if($key == 'mail'){
                $this->checkMail($data);
            } else if($key == 'job'){
                    $this->checkJob($data);
            } else if($key == 'gender'){
                    $this->checkGender($data);
            } else if($key == 'check'){
                    $this->checkConsent($data);
            } else {
                $this->checkChar($data, $key);
            }
            $this->checkLength($data, $key);
        }
        //return $this->errors;
        return empty($this->errors);
    }*/
    public function checkDataerrors($input_info){
        foreach($input_info as $key => $data){
            $validations = $this->getVali($key);
            foreach($validations as $vali){
                if($vali == 'Mail') $this->checkMail($data);
                if($vali == 'Job') $this->checkJob($data);
                if($vali == 'Gender') $this->checkGender($data);
                if($vali == 'Check') $this->checkConsent($data);
                if($vali == 'Empty') $this->checkEmpty($data, $key);
                if($vali == 'Length') $this->checkLength($data, $key);
                if($vali == 'Ban') $this->checkChar($data, $key);
            }
        }
        //return var_dump($this->errors);
        return empty($this->errors);
    }

    public function getVali($key){
       $vali = explode('|', $this->data_validation[$key]);
        return $vali;
    }

    public function getErrors(){
        return $this->errors;
    }

    protected function checkEmpty($data, $key){
        if(empty($data)){
            $this->errors[$key] = $this->errors_empty[$key];
        }
    }

    /*
     * @param string $data
     * @param string $key
     */
    protected function checkChar($data ,$key){
        if(preg_match($this->char_pattern, $data)){
            $this->errors[$key] = '禁則文字が含まれています。*+?{}()[]^$|/-\"\'は使えません。';
        }
    }

    /*
     * @param array $data
     * @return void
     */
    protected function checkMail($data){
        if(!preg_match($this->mail_pattern, $data)){
            $this->errors['mail'] = "メールアドレスではありません。入力し直してください。";
        }
    }

    protected function checkJob($data){
        if(!in_array($data, $this->job_array)){
            $this->errors['job'] = "不正な入力です。";
        }
    }

    protected function checkGender($data){
        if(!in_array($data, $this->gender_array)){
            $this->errors['gender'] = "不正な入力です。";
        }
    }

    protected function checkLength($data, $key){
        if(mb_strlen($data, 'UTF-8') > $this->errors_length[$key]){
            $this->errors[$key] = '文字数がオーバーしています。入力し直してください。';
        }
    }

    protected function checkConsent($data){
        if($this->check_value != $data){
            $this->errors['check'] = '不正な入力です。';
        }
    }
}