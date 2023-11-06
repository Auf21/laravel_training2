<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[StaticController::class,'index'] )->name('Home.index');
Route::get('/about/about', [StaticController::class,'about'])->name('Home.about');
Route::get('/contact',[StaticController::class,'contact'] )->name('Home.contact');
Route::resource('/computer',ComputerController::class);
/*                     // القوسين يلي تحت بالراوت مشان يفهم الراوت انو هاد reqquest
Route::get('/store/{catogary?}/{item?}', function ($catogary=null ,$item=null) {
   if(isset($catogary)){
    if(isset($item)){
        return '<h1>{$item}</h1>';
    } 
   return "<h1>{$catogary}</h1>";
   } return '<h1>store</h1>';
}); */
/*
 route::group(['namespace' =>'Admin'],function(){
    route::get('sh1','FirrstController@showdata1')->Middleware('auth')  ;
    route::get('sh2','FirrstController@showdata2')   ;
} );
Route::get('login',function(){
    return 'Welcome';
})->name('login');*/

/* route::resource('news','NewsController');
route::get('e',function(){
    return view('hh');
}); */
/* route::get('style',function(){
    $filter=request('style');
    if (isset($filter)) {
           return ('this pagr is a test page programing <span style="color:red">'.strip_tags($filter).'</span>');
    }else {return ('this pagr is a test page programing <span style="color:red">All Prodacts</span>');}
 
}); */
//route::get('index','UserController@getindex'); 
