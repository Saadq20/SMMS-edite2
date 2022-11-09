<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\AnalysisController;




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

Route::get('about_us', function () {
    return view('about_us');
});


Route::get('about_us', function () {
    return view('about_us');
});
Route::get('about_us_get', function () {
    return view('about_us_get');
});




Route::get('/login', function () 
{
    
    return view('login');
});

Route::get('/register', function () 
{
    
    return view('/register ');
});

Route::get('/', function () 
{
    return view('/home');
});






Route::get('/price', function () {
    return view('/price');
});

Route::get('/user_post', function () {
    return view('/user_post');
    
});

Route::get('/schdule', function () {
    return view('/schdule');
});


Route::get('/accounts', function () {
    return view('/accounts');
});



/*Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});
*/
Route::redirect('login','user_post' );
Auth::routes();



Route::get('/auth/twitter', [TwitterController::class, 'loginwithTwitter']);
Route::get('/auth/callback/twitter', [TwitterController::class, 'cbTwitter']);


Route::get('/auth/facebook', [TwitterController::class, 'loginwithFacebook']);
Route::get('/auth/callback/facebook', [TwitterController::class, 'cbFacebook']);

Route::get('analysis', [AnalysisController::class, 'index']);


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/user_post', function () {
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, 'https://api.twitter.com/2/tweets/1586745912851722240');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    
    
    $headers = array();
    $headers[] = 'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAACqYigEAAAAA%2Ff1hVO9dkpqDjC8MdWNKHFyq2TI%3DRQRP1bpV93FIX0GEuaHQwfTNELNs2FLhh5dDUYoscusO7QtyOa' ;
    $headers[] = 'Cookie: guest_id=v1%3A166705578925324960';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
        return view('user_post',compact('result'));
    })->name('getTweet');

    Route::post('/sendpost', [TwitterController::class, 'postTweet'])->name("sendpost");
    



   
  