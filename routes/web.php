<?php

use Illuminate\Support\Facades\Route;

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

class User{
    public $name;
    public $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    
}


// Route::get('/', function () {
//     return [1,2,3];
// });

Route::get('/', function () {
    $users = new User("Clém", "adrar");
    return [$users];
});

Route::get('/greeting', function(){
    return 'Hello world !';
});

Route::get('/user', function(){
    return view('/welcome');
});


