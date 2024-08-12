<?php

namespace App\Controllers;
use App\Models\Autheticate;
class Home extends BaseController
{
    public function index() : string
    {
        // $auth = new Autheticate();
        // print_r($auth->getdata());
        // print("hello");
        return view('welcome_message');
    }

    public function testcontroller(){
        return json_encode(["name"=>"ayush shukla","roll no "=>39]);
    }
}
