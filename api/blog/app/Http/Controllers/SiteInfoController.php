<?php
namespace App\Http\Controllers;
use App\Models\SiteInfoModel;
use Illuminate\Http\Request;

class SiteInfoController extends Controller{

    function sendSiteInfo(){
        $result= SiteInfoModel::get();
        return $result;
    }
}
