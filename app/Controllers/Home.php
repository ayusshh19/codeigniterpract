<?php

namespace App\Controllers;
use App\Libraries\Test;
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
        // code from custom library 
        // $obj = new Test();
        // $obj->dbdata();
        return json_encode(["name"=>"ayush shukla","roll no "=>39]);
    }

    public function users(){
        $usermodel = new Autheticate() ;
        $all_user_data = $usermodel->getalldata();
        return view("users/userslist",["users"=> $all_user_data]);
    }
}
