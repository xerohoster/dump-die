<?php
if (!function_exists('dd')) {
    function dd($data = null, $exit = 1) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($exit == 1) {
        	exit();
        }
    }
}
