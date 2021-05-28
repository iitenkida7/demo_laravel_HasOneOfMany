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
    dump("latestOrder");
    dump(User::find(1)->latestOrder()->toSql());
    dump(User::find(1)->latestOrder()->get());
    dump("oldestOrder");
    dump(User::find(1)->oldestOrder()->toSql());
    dump(User::find(1)->oldestOrder()->get());
    dump("largestOrder");
    dump(User::find(1)->largestOrder()->toSql());
    dump(User::find(1)->largestOrder()->get());
    dump("unpaidLatestOrder");
    dump(User::find(1)->unpaidLatestOrder()->toSql());
    dump(User::find(1)->unpaidLatestOrder()->get());
});
