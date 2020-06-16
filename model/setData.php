<?php

    class setData {

      /*
       * @param string $data
       * @return string
       */
        public function setData($data=NULL){
            if(isset($data)){
                return $data;
            }
            return '';
        }

    }
