<?php

    class SetData {

        public $input_data = [];

        public $input_items = ['name', 'mail', 'main','job', 'gender', 'check'];

        function __construct(){
            foreach($this->input_items as $key){
                $this->input_data[$key] = "";
            }
        }

      /*
       * @param string $data
       * @param srring $key
       */
        public function setInputdata($data, $key){
            if(in_array($key, $this->input_items)){
                $this->input_data[$key] = $data;
            }
        }

        public function getInputdata(){
            return $this->input_data;
        }

        public function getInputitems(){
            return $this->input_items;
        }

    }
