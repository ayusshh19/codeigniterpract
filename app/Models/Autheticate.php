<?php
namespace App\Models;
use CodeIgniter\Model;

class Autheticate extends Model { 
    public function getdata(){
        $data = ['name '=>"ayush shukla"];
        return json_encode($data);
    }
}