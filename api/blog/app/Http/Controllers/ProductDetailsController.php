<?php
namespace App\Http\Controllers;
use App\Models\ProductDetailsModel;
use App\Models\ProductListModal;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller{
    function productDetails(Request $request){
        $product_code=$request->code;
        $ProductDetails= ProductDetailsModel::where('product_code', $product_code)->get();
        $ProductList= ProductListModal::where('product_code', $product_code)->get();
        $item=[
            'ProductDetails'=>$ProductDetails,
            'ProductList'=>$ProductList
        ];
        return $item;
    }
}
