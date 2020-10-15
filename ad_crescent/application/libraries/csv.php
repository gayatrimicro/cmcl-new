<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Csv extends MY_Controller {

        public function __construct() {
            parent::__construct();
        }
        public function exports_data($data){
             header("Content-type: application/csv");
            header("Content-Disposition: attachment; filename=\"test".".csv\"");
            header("Pragma: no-cache");
            header("Expires: 0");

            $handle = fopen('php://output', 'w');

            foreach ($data as $data) {
                fputcsv($handle, $data);
            }
                fclose($handle);
            exit;
        }
}