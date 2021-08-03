<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller{
    function userLogin(Request $request){
        $mobile= $request->mobile_number;
        $password= $request->password;
        $count=LoginModel::Where('mobile_number', $mobile)->Where('password',$password)->count();
        if($count==1){
            return "1";
        }else{
            return "0";
        }
    }

    function userProfile(Request $request){
        $Mobile= $request->mobile_number;
        $result= LoginModel::Where('mobile_number',$Mobile)->get();
        return $result;
    }


    function userProfileUpdate(Request $request){
        $mobile_number = $request->input('mobile_number');
        $password = $request->input('password');
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_address = $request->input('user_address');
        $result = LoginModel::Where('mobile_number', $mobile_number)->update(['mobile_number'=>$mobile_number, 'password'=>$password, 'user_name'=>$user_name, 'user_email'=>$user_email, 'user_address'=>$user_address]);
        if($result == true){
            return 1;
        }
        else {
            return 0;
        }
    }
}
