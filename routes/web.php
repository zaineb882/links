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
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
 return View('welcome');
});
Route::get('/shop', function()
{
   return View ('shop');
});
Route::get('/contact', function()
{
   return View ('contact');
});
Route::post('/contact', Function(Request $request){
  Mail::to('zsaadoub882@gmail.com')->send(new ContactMail($request));
  return redirect('/');

});
Route::get('/demo', function () {
   return view('demo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', function(){
  return view('pages/index');
});

Route::get('/submit', function () {
    return view('submit');
});
Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/');
});
