<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'Whmcs\AuthController@login');

//auth:api is the middleware for normal passport behaviour.

Route::group(['middleware' => ['client']], function () {
    Route::apiResource('products', 'ProductController');
    Route::get('/users/{id}/users', 'Whmcs\UserController@users');
    Route::get('/users/{id}/domains', 'Whmcs\UserController@domains');
    Route::get('/users/{id}/products', 'Whmcs\UserController@products');
    Route::apiResource('users', 'UserController');
    Route::apiResource('categories', 'CategoryController');
    Route::apiResource('vendors', 'VendorController');
    Route::apiResource('orders', 'OrderController');

    Route::get('/office/availability/{tenant}', 'ProductController@tenantAvailability');
    Route::get('/office/find/{tenant}', 'ProductController@findTenant');
    Route::get('/office/{tenant}', 'ProductController@getTenant');
});


Route::get('/test', function() {


    $client = new \GuzzleHttp\Client();
    $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
        'form_params' => [
            'action' => 'getpartnerclients',
            'partnerid' => 2751,
            'username' => 'api',
            'password' => '3bc94f7f330955b6a9f776c10cc313e4',
            'responsetype' =>  'json'
        ]
    ]);

    dd(json_decode( $res->getBody()->getContents()));



    //$user = \App\User::find(2);
    //dd($user->reseller[0]->id);
});
