<?php

class OutputCSV {

    public $file_name = "../csv/contact_info.csv";
    protected $file_handler;
    protected $output_items =  ['name', 'mail', 'main','job', 'gender', 'check'];

    public function outputDataCSV($input_info, $mode){
        $file_handler = fopen($this->file_name, $mode);
        mb_convert_variables('SJIS-win', 'UTF-8', $input_info);
        fputcsv($file_handler, $input_info);
        fclose($file_handler);
    }

    public function dbDataCSV($data){
        $this->outputDataCSV($this->output_items, "w");
        foreach ($data as $row) {
            $this->outputDataCSV($row, "a");
        }
    }

    public function getCSVfile(){
        return $this->file_name;
    }

    public function dlFile($datas){
        $csv_data = '';
        if( !empty($datas) ) {
            // 1行目のラベル作成
            foreach( $this->output_items as $value ) {
                $csv_data .= '"'.$value.'",';
            }
            $csv_data .= "\n";
            foreach( $datas as $row ) {
                foreach($row as $key => $value){
                    $csv_data .= '"' . $row[$key] . '",';
                }
                $csv_data .= "\n";
            }
        }
        return $csv_data;
    }
}