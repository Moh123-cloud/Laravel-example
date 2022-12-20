 <?php

//imprt your controller
use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Template; */
use App\Http\Controllers\kamau;
use App\Http\Controllers\html;
use App\Http\Controllers\databaseController;
use App\Http\Controllers\modelController;
use App\Http\Controllers\httpController;
use App\Http\Controllers\httpRequest;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\addMember;
use App\Http\Controllers\queryController;
use App\Http\Controllers\joinController;
use App\Http\Controllers\accessorController;
use App\Http\Controllers\modifyController;
use App\Http\Controllers\oneController;
use App\Http\Controllers\bindController;
use App\Http\Controllers\connectController;
use Illuminate\Support\Str;

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
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

/* Route::get('/about', function (){
    return view('about');
}); */

Route::view("about", "about");
Route::view("contact", "contact");

//Route::get("path", "controller file");
//Route::get("users", "Users@index");

//Route for User view
Route::get("users/{name}", function($name){
    return view("users", ['controller'=>$name]);
});

//Route for UserController
Route::get("users/{name}", [UserController::class,'loadView']);

//route for component
Route::view("users", "component");
Route::view("about", "aboutcomp");

//route for blade template
Route::get("users", [Template::class, 'viewLoad']); 

//ROute for blade template
Route::get("blade", [kamau::class, 'viewLoad']);

//Route for html form
Route::post("html", [html::class, 'getData']);
Route::view("login", "html");

//Global middleware routes
Route::view("middleware","middleware");
Route::view("home","home");
Route::view("noacess","noacess");

//Group middleware routes
Route::view("home","home");
Route::view("noacess","noacess");

Route::group(['middleware'=>['protectedPage']], function(){
    Route::view("middleware","middleware");
});

//Route middleware routes
Route::view("middleware","middleware")->middleware('protectedPage');
Route::view("home","home");
Route::view("noacess","noacess");

// Database Configuration Route
Route::get("database", [databaseController::class, 'index']);

//Model Route
Route::get("models", [modelController::class, 'getController']);

//HTTP Client Route
Route::get("http", [httpController::class, 'http']);

//Http Request Route
Route::delete("httprequest", [httpRequest::class, 'index']);
Route::view("login", 'httpRequest');

//login session Route
Route::post("session", [sessionController::class, 'index']);
//Route::view("login", 'login');
//Route::view("profile", "profile");

Route::get('/profile', function(){
    if(session()->has('usersession')){
        return view('profile');
    }
    return view('login');
});

Route::get('/login', function(){
    if(session()->has('usersession')){
        return redirect('profile');
    }
    return view('login');
});

Route::get('/logout', function(){
    if(session()->has('usersession'))
    {
        session()->pull('usersession');
    }
    return redirect('login');
});

//Route for List from Database
Route::view('blade', 'list');
Route::get('list', [memberController::class, 'show']);
Route::get('delete/{id}', [memberController::class, 'delete']);

//Route for saving Data in Dataase
Route::view("save", "add");
Route::post("save", [addMember::class, 'add']);

//Route for query builder
Route::get('query', [queryController::class, 'dbOperation']);

//Route for joining database tables
Route::get('join', [joinController::class, 'show']);

//Route fo accessor
Route::get('access', [accessorController::class, 'access']);

//Route fo mutator
Route::get('modify', [modifyController::class, 'index']);

//Route for one to one relation
Route::get('one', [oneController::class, 'index']);


//String Fluent
/* $data = "hi, let's learn laravel";
 
$data = Str::ucfirst($data);
$data = Str::replaceFirst('Hi','Hello', $data);
$data = Str::camel($data); 

$data = Str::of($data)
->ucfirst($data)
->replaceFirst('Hi','Hello', $data)
->camel($data);

echo $data; */

//Route - Model binding Route
Route::get('bind/{key:name}', [bindController::class, 'index']);

//Route for Mutiple Database Connection
Route::get('connect', [connectController::class, 'index']);