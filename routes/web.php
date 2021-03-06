<?php

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

Route::get('/', 'MypageController@index')->name('mypage.get');

// 会員登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン、ログアウト
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// ログイン認証
Route::group(['middleware'=>'auth'],function(){
    // プロフィール
    Route::resource('profile', 'ProfileController',['only'=>['index','create','edit','store','update']]);
    // 計画
    Route::resource('plan','PlanController',['only'=>['index','create','edit','store','update']]);
    // 日報
    Route::resource('report','ReportController', ['only' => ['index', 'create', 'edit', 'store', 'update','destroy']]);
});
    