<?php
//<project>/routes/api.php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

comando: php artisan route:list
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 * 
 */
Route::apiResource("users","User\UserController");

Route::apiResource("buyers","Buyer\BuyerController",["only"=>["index","show"]]);
Route::apiResource("buyers.transactions","Buyer\BuyerTransactionController",["only"=>["index"]]);
Route::apiResource("buyers.categories","Buyer\BuyerCategoryController",["only"=>["index"]]);
Route::apiResource("buyers.products","Buyer\BuyerProductController",["only"=>["index"]]);
Route::apiResource("buyers.sellers","Buyer\BuyerSellerController",["only"=>["index"]]);

Route::apiResource("sellers","Seller\SellerController",["only"=>["index","show"]]);
Route::apiResource("sellers.transactions","Seller\SellerTransactionController",["only"=>["index"]]);
Route::apiResource("sellers.categories","Seller\SellerCategoryController",["only"=>["index"]]);
Route::apiResource("sellers.buyers","Seller\SellerBuyerController",["only"=>["index"]]);

Route::apiResource("products","Product\ProductController",["only"=>["index","show"]]);

Route::apiResource("transactions","Transaction\TransactionController",["only"=>["index","show"]]);
Route::apiResource("transactions.categories","Transaction\TransactionCategoryController",["only"=>["index"]]);
Route::apiResource("transactions.sellers","Transaction\TransactionSellerController",["only"=>["index"]]);

Route::apiResource("categories","Category\CategoryController");
Route::apiResource("categories.transactions","Category\CategoryTransactionController");
Route::apiResource("categories.buyers","Category\CategoryBuyerController");
Route::apiResource("categories.products","Category\CategoryProductController");
Route::apiResource("categories.sellers","Category\CategorySellerController");
//Route::get("slug-de-ruta","Product\ProductController@methodX");
