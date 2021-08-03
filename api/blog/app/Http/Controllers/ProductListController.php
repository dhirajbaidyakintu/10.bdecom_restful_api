<?php
namespace App\Http\Controllers;
use App\Models\ProductListModal;
use Illuminate\Http\Request;

class ProductListController extends Controller{
    function productListByRemark(Request $request){
        $remark= $request->remark;
        $productList= ProductListModal::where('remark', $remark)->orderBy('id','desc')->limit(24)->get();
        return $productList;
    }

    function productListByCategory(Request $request){
        $Category= $request->Category;
        $productList= ProductListModal::where('category', $Category)->get();
        return $productList;
    }

    function productListBySubCategory(Request $request){
        $Category= $request->Category;
        $SubCategory= $request->SubCategory;
        $productList= ProductListModal::where('category', $Category)->where('sub_category', $SubCategory)->get();
        return $productList;
    }

    function similarProduct(Request $request){
        $subcategory= $request->SubCategory;
        $ProductList=ProductListModal::Where('sub_category',$subcategory)->orderBy('id','desc')->limit(12)->get();
        return $ProductList;
    }

    function productListBySearch(Request $request){
        $key= $request->key;
        $productList= ProductListModal::where('title','LIKE', "%{$key}%")->get();
        return $productList;
    }
}
