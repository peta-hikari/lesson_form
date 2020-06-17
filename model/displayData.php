<?php

class displayData {
    protected $jobs = [
                  'SE'=>'SE',
                  '営業'=>'営業'
              ];

    protected $genders = [
                  'M' => '男性',
                  'F' => '女性'
              ];

    protected $output_info = [];

    public function displayData($input_info = []){
        foreach($input_info as $key => $data){
            if($key == 'job'){
                $this->setJob($data);
            } else
            if($key == 'gender'){
                $this->setGender($data);
            } else
            if($key == 'check'){
                break;
            } else {
                $this->output_info[$key] = $input_info[$key];
            }
        }
        return $this->output_info;
    }

    protected function setJob($data){
        foreach($this->jobs as $key => $job_data){
            if($key == $data){
                $this->output_info['job'] = $job_data;
                break;
            }
        }
    }

    protected function setGender($data){
        foreach($this->genders as $key => $gender_data){
            if($key == $data){
                $this->output_info['gender'] = $gender_data;
                break;
            }
        }
    }
}