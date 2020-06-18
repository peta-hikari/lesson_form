<?php

    class SetData {

        public $input_data = [
                'name'   => '',
                'mail'   => '',
                'main'   => '',
                'job'    => '',
                'gender' => '',
                'check'  => ''
               ];

      /*
       * @param string $data
       * @param srring $key
       */
        public function setInputdata($data, $key){
            $this->input_data[$key] = $data;
        }

        public function getInputdata(){
            return $this->input_data;
        }

    }
