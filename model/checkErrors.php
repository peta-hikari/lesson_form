<?php

class checkErrors {

    /*
     * @ver array
     */
    public $errors = [];

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

    /*
     * @ver string
     */
    protected $mail_pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    protected $char_pattern  = '/[\*\+\?\{\}\(\)\[\]\^\$\|\/\-\"\']/';

    /*
     * @param array $input_info
     * @return array
     */
    public function checkErrors($input_info = []){
        foreach($input_info as $key => $data){
            if(empty($data)){
                $this->checkEmpty($key);
            } else if($key == 'mail'){
                $this->checkMail($data);
            } else if($key == 'job'){
                    $this->checkJob($data);
            } else if($key == 'gender'){
                    $this->checkGender($data);
            } else {
                $this->checkChar($data, $key);
            }
            $this->checkLength($data, $key);
        }
        return $this->errors;
    }

    protected function checkEmpty($key){
        $this->errors[$key] = $this->errors_empty[$key];
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
        $check = false;
        for($key = 0; $key < count($this->job_array); $key++){
            if($data == $this->job_array[$key]){
                $check = true;
                break;
            }
        }
        if($check == false){
            $this->errors['job'] = "不正な入力です。";
        }
    }

    protected function checkGender($data){
        $check = false;
        for($key = 0; $key < count($this->gender_array); $key++){
            if($data == $this->gender_array[$key]){
                $check = true;
                break;
            }
        }
        if(!$check){
            $this->errors['gender'] = "不正な入力です。";
        }
    }

    protected function checkLength($data, $key){
        if(mb_strlen($data) > $this->errors_length[$key]){
            $this->errors[$key] = '文字数がオーバーしています。入力し直してください。';
        }
    }
}