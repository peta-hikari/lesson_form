<?php

class checkErrors {

    /*
     * @ver array
     */
    public $errors = [];

    protected $errors_empty = [
                "name"   => '未入力です。名前を入力してください。',
                "maile"  => '未入力です。メールアドレスを入力してください。',
                "main"   => '未入力です。お問い合わせ内容を入力してください。',
                "job"    => '業種を選択してください。',
                "gender" => '',
                "check"  => 'お問い合わせには同意していただく必要があります。'
              ];

    /*
     * @ver string
     */
    protected $maile_pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    protected $char_pattern  = "/\{¥/:?<>|\}/";

    /*
     * @param array $input_info
     * @return array
     */
    public function checkEmpty($input_info = []){
        foreach($input_info as $key => $data){
            if(empty($data)){
               $this->errors[$key] = $this->errors_empty[$key];
            } else if($key == 'maile'){
                $this->checkMaile($data);
            }
        }
        return $this->errors;
    }

    public function checkChar($input_info = []){
        foreach($input_info as $key => $data){
            if(preg_match($this->char_pattern, $data)){
               $this->errors[$key] = '禁則文字が含まれています。入力し直してください。';
            }
        }
        return $this->errors;
    }

    /*
     * @param array $data
     * @return void
     */
    protected function checkMaile($data){
        if(!preg_match($this->maile_pattern, $data)){
            $this->errors['maile'] = "メールアドレスではありません。再度ご入力ください。";
        }
    }

}