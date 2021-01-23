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

Auth::routes();

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
    Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser')->name('{provider}');
});

// URLと処理内容の紐付けを行っている
// 「もしURL「/」に飛んだならこの処理を起動する
// ArticleController@indexのindexの部分が、ArticleController.phpのindexアクションメソッドに対応する。

// Routeファサードのメソッドに、nameメソッドを繋げると、そのルーティングに名前を付けられる
Route::get('/', 'ArticleController@index')->name('articles.index');

// resourceメソッドに、exceptメソッドを繋げると、指定したルーティングを除外
// authミドルウェアは、リクエストをコントローラーで処理する前にユーザーがログイン済みであるかどうかをチェックし、
// ログインしていなければユーザーをログイン画面へリダイレクト
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth'); //-- exceptメソッドの引数を変更
Route::resource('/articles', 'ArticleController')->only(['show']); //-- この行を追加

// like機能の呼び出し
// prefixは各々のルートを処理してくれる
Route::prefix('articles')->name('articles.')->group(function () {
    Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
    Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});

Route::get('/tags/{name}', 'TagController@show')->name('tags.show');

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'UserController@show')->name('show');
    Route::get('/{name}/likes', 'UserController@likes')->name('likes');
    Route::get('/{name}/followings', 'UserController@followings')->name('followings');
    Route::get('/{name}/followers', 'UserController@followers')->name('followers');
    Route::middleware('auth')->group(function () {
            Route::put('/{name}/follow', 'UserController@follow')->name('follow');
            Route::delete('/{name}/follow', 'UserController@unfollow')->name('unfollow');
        });
});




/*Route::get('/', function () {
    return view('welcome');
});
*/
