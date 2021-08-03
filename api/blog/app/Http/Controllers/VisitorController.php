<?php
namespace App\Http\Controllers;
use App\Models\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller{

    //For Client Visitor Table
    function sendVisitorDetails(){
        $ip_address=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visit_time= date("h:i:sa");
        $visit_date= date("d-m-Y");
        VisitorModel::insert([
            'ip_address'=>$ip_address,
            'visit_time'=>$visit_time,
            'visit_date'=>$visit_date,
        ]);
    }
}
