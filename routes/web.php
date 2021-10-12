<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegisController;
// use App\Models\Regis;
use App\Models\Chanakans;

// use Illuminate\Http\Request;
// use App\Http\Requests;

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
// Route::get('/', [RegisController::class, 'index'])->name('regis');
Route::get('/', function() {
    return view('register');
});
Route::post('/', function(){
    $regis = new Chanakans();
    // dd($regis->img_path = request('img_path'));
    // dd($regis->fname = request('fname'));
    // dd($regis->lname = request('lname'));
    // dd($regis->username = request('username'));
    // dd($regis->email = request('email'));
    // dd($regis->tel = request('tel'));
    $img = $regis->img_path = request('img_path');
    $name = $regis->fname = request('fname');
    // $test = $img->getClientOriginalName();
    // $test = $img->isValid();

    $NewImageName = time() . '-' . $name . '.' . $img->extension();
    $img->move(public_path('images'), $NewImageName);

    // dd($test);
    // $regis->save();
    Chanakans::create([
        'img_path' => $NewImageName,
        'fname' => request('fname'),
        'lname' => request('lname'),
        'username' => request('username'),
        'email' => request('email'),
        'tel' => request('tel'),
    ]);
    return redirect('/');
});
//Route::post('/add', [RegisController::class, 'store'])->name('addRegis');


// Route::post('/', function (\Illuminate\Http\Requset $request) {
//     return $request->file(key:'image');
// });

Route::get('/welcome', function () {
    return view('welcome');
});



//about page
Route::get('/about', function() {
    return view('about');
});

//Test w parameter
Route::get('/users/{name}.{lname}', function($name, $lname) {
    echo "Hello $name ";
    echo "$lname";
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

