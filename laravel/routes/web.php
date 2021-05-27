<?php

use Illuminate\Support\Facades\Route;
use App\Models\Order;
use App\Models\User;


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

Route::get('/', function () {
    dump(User::find(1)->latestOrder()->first());
    dump(User::find(1)->oldestOrder()->first());
    dump(User::find(1)->largestOrder()->first());
    dump(User::find(1)->unpaidLatestOrder()->first());

    

});
