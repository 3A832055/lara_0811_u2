<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    /*Route::get('/', function () {
        return view('welcome');
        });
//Route 回傳 view
     Route::get('/',function(){
        return view('welcome');
        });
        
//Route 回傳字串
      Route::get('/',function(){
        return 'welcome';
         });*/
//Route 跳轉路由
     Route::get('r1',function(){
        return redirect('r2');
        });

     Route::get('r2',function(){
        return view('welcome');
         });
//Route 接收參數
/*
    Route::get('hello/{name}',function($name){
        return'Hello,'.$name;
        });

    Route::get('hello/{name?}',function($name='Everybody'){
        return'Hello,'.$name;
         })->name('hello.index');

//增加新Route
   /*  Route::get('hello/{name}', function($name){
        return 'Hello, '.$name.'. Thanks you!';
        });
        */

       /* Route::get('dashboard',function(){
            return 'dashboard';
            });

            Route::group(['prefix'=>'admin'],function(){
                Route::get('dashboard',function(){
                return 'admin dashboard';
                });
                });

                Route::get ('home',[HomeController::class,'index'])->name('home.index');
                */