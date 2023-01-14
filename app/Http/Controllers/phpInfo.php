<?php
namespace App\Http\Controllers;

class phpInfo {
    public function version(){
        echo 'PHP version: ' . phpversion();
    }
}
