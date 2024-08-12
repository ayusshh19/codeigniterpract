<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class Autheticate extends Model
{
    public function getdata()
    {
        $data = ['name ' => "ayush shukla"];
        return json_encode($data);
    }

    public function getalldata()
    {
        $data = [
            [
                "empid" => 1,
                "empname" => "Ayush Shukla",
                "Designation" => "Software Engineer",
                "Salary" => "20000"
            ],
            [
                "empid" => 2,
                "empname" => "Nisha Verma",
                "Designation" => "Data Analyst",
                "Salary" => "25000"
            ],
            [
                "empid" => 3,
                "empname" => "Ravi Kumar",
                "Designation" => "Project Manager",
                "Salary" => "45000"
            ],
            [
                "empid" => 4,
                "empname" => "Sunita Sharma",
                "Designation" => "HR Manager",
                "Salary" => "35000"
            ],
            [
                "empid" => 5,
                "empname" => "Rohan Gupta",
                "Designation" => "Business Analyst",
                "Salary" => "30000"
            ],
            [
                "empid" => 6,
                "empname" => "Megha Patel",
                "Designation" => "Quality Assurance",
                "Salary" => "28000"
            ],
            [
                "empid" => 7,
                "empname" => "Amit Singh",
                "Designation" => "DevOps Engineer",
                "Salary" => "38000"
            ]
        ];
        $db = Database::connect();
        $results = $db->query("select * from employees")->getResult('array');
        return $results;
    }
}