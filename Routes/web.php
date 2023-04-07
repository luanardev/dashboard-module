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

Route::get('auth', function (Request $request) {

    $tokenParts = explode(".", $request->token);
    $tokenPayload = json_decode(base64_decode($tokenParts[1]));
    $payload = (array) $tokenPayload;

    if(Auth::attempt($payload)){
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }else{
        return redirect()->route('login');
    }
});


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
