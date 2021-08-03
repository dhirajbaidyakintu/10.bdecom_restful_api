<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\CategoryDetailsController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FavListController;

//For Visitor
Route::get('/sendVisitorDetails', [VisitorController::class, 'sendVisitorDetails']);

//For Contact
Route::post('/sendContactDetails', [ContactController::class, 'sendContactDetails']);

//For SiteInformation
Route::get('/sendSiteInfo', [SiteInfoController::class, 'sendSiteInfo']);

//For Category
Route::get('/sendCategoryDetails', [CategoryDetailsController::class, 'sendCategoryDetails']);

//For ProductList
Route::get('/productListByRemark/{remark}', [ProductListController::class, 'productListByRemark']);
Route::get('/productListByCategory/{Category}', [ProductListController::class, 'productListByCategory']);
Route::get('/productListBySubCategory/{Category}/{SubCategory}', [ProductListController::class, 'productListBySubCategory']);

//For Slider
Route::get('/sendSliderInfo', [SliderController::class, 'SendSliderInfo']);

//For Product Details
Route::get('/productDetails/{code}', [ProductDetailsController::class, 'productDetails']);

//For Notification History
Route::get('/notificationHistory', [NotificationController::class, 'notificationHistory']);

//For Search
Route::get('/productListBySearch/{key}', [ProductListController::class, 'productListBySearch']);

//For Similar Product or Suggested Product
Route::get('/similarProduct/{SubCategory}', [ProductListController::class, 'similarProduct']);

//For Review
Route::post('/postReview', [ReviewController::class, 'postReview']);
Route::get('/reviewList/{code}', [ReviewController::class, 'reviewList']);

//For login
Route::get('/userLogin/{mobile_number}/{password}',[LoginController::class,'userLogin']);

//For product order
Route::post('/addToCart',[ProductOrderController::class,'AddToCart']);
Route::get('/cartCount/{mobile}',[ProductOrderController::class,'CartCount']);
Route::get('/addFav/{mobile}/{code}',[FavListController::class,'addFav']);
Route::get('/favList/{mobile}',[FavListController::class,'favList']);
Route::get('/removeFavItem/{mobile}/{code}',[FavListController::class,'removeFavItem']);
Route::get('/cartList/{mobile}',[ProductOrderController::class,'CartList']);
Route::get('/removeCartList/{id}',[ProductOrderController::class,'RemoveCartList']);
Route::get('/cartItemPlus/{id}/{quantity}/{price}',[ProductOrderController::class,'CartItemPlus']);
Route::get('/cartItemMinus/{id}/{quantity}/{price}',[ProductOrderController::class,'CartItemMinus']);
Route::post('/cartOrder',[ProductOrderController::class,'CartOrder']);
Route::get('/orderListByUser/{mobile}',[ProductOrderController::class,'OrderListByUser']);

//For User Profile
Route::get('/userProfile/{mobile_number}', [LoginController::class,'userProfile']);
Route::post('/userProfileUpdate', [LoginController::class,'userProfileUpdate']);
