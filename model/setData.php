<?php

    class setData {

        public $info = [
            'name'   => '',
            'maile'  => '',
            'main'   => '',
            'job'    => '',
            'gender' => '',
            'check'  => ''   
        
        ];

        public function setData($name = null, $maile = null, $main = null, $job = null, $gender = null, $check = null){
            $this->info['name'] = $name;
            $this->info['maile'] = $maile;
            $this->info['main'] = $main;
            $this->info['job'] = $job;
            $this->info['gender'] = $gender;
            $this->info['check'] = $check;
        }
    }
