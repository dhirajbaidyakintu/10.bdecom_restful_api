<?php
namespace App\Http\Controllers;
use App\Models\FavListModel;
use App\Models\ProductListModal;
use Illuminate\Http\Request;

class FavListController extends Controller{
    function addFav(Request $request){
        $code= $request->code;
        $mobile= $request->mobile;
        $ProductDetails= ProductListModal::Where('product_code', $code)->get();
        $result= FavListModel::insert([
            'title'=>$ProductDetails[0]['title'],
            'image'=>$ProductDetails[0]['image'],
            'product_code'=>$code,
            'mobile'=>$mobile,
        ]);
        return $result;
    }

    //For NavMenu Favourite Item click
    function favList(Request $request){
        $mobile= $request->mobile;
        $result=FavListModel::Where('mobile',$mobile)->get();
        return  $result;
    }

    //For remove Favourite item
    function removeFavItem(Request $request){
        $code= $request->code;
        $mobile= $request->mobile;
        $result=FavListModel::Where('mobile',$mobile)->Where('product_code',$code)->delete();
        return  $result;
    }
}
