<?php

class OutputCSV {

    protected $file_handler;
    //protected $output_data = [];

    public function outputDataCSV($input_info){
        $file_handler = fopen("../csv/contact_info.csv", "a");
        mb_convert_variables('SJIS-win', 'UTF-8', $input_info);
        fputcsv($file_handler, $input_info);
        fclose($file_handler);
    }
}