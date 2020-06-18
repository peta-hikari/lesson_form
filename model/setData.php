<?php

    class SetData {

      /*
       * @param string $data
       * @return string
       */
        public function setInputdata($data){
            if(isset($data)){
                return $data;
            }
            return '';
        }

    }
