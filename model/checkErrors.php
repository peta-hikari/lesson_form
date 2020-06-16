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

    /*
     * @ver string
     */
    protected $mail_pattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    protected $char_pattern  = "/\A[\r\n[:^cntrl:]]{0,100}\z/u";

    /*
     * @param array $input_info
     * @return array
     */
    public function checkEmpty($input_info = []){
        foreach($input_info as $key => $data){
            if(empty($data)){
               $this->errors[$key] = $this->errors_empty[$key];
            } else if($key == 'mail'){
                $this->checkMail($data);
            } else {
                $this->checkChar($data, $key);
            }
        }
        return $this->errors;
    }

    /*
     * @param string $data
     * @param string $key
     */
    public function checkChar($data ,$key){
        if(!preg_match($this->char_pattern, $data)){
            $this->errors[$key] = '禁則文字が含まれています。入力し直してください。';
        }
    }

    /*
     * @param array $data
     * @return void
     */
    protected function checkMail($data){
        if(!preg_match($this->mail_pattern, $data)){
            $this->errors['mail'] = "メールアドレスではありません。再度ご入力ください。";
        }
    }

}