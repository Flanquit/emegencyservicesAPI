<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PromoterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IlifaController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public Routes 
Route::get('/getUsers', [IlifaController::class, 'getUsers']);

// Route::resource('/events', EventController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Services 
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/service/{id}', [ServiceController::class, 'show']);
Route::get('/services/search/{name}', [ServiceController::class, 'search']);
// Services
Route::post('services',[ServiceController::class, 'store']);
Route::put('services/{id}',[ServiceController::class, 'update']);
Route::delete('services/{id}',[ServiceController::class, 'destroy']);
// Route::post('services/reactions/{id}',[EventController::class, 'reactions']);
// Promoters
// Promoters 
// Route::get('/promoters', [PromoterController::class, 'index']);
// Route::get('/promoters/{id}', [PromoterController::class, 'show']);
// Route::get('/promoters/search/{name}', [PromoterController::class, 'search']);

// Protected Routes 
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::post('promoters',[PromoterController::class, 'store']);
    Route::put('promoters/{id}',[PromoterController::class, 'update']);
    Route::delete('promoters/{id}',[PromoterController::class, 'destroy']);
    // User /Clients
    Route::put('user/update/{id}',[UserController::class, 'update']);
    // logout
    Route::post('/logout', [AuthController::class, 'logout']);
});

// routes for testing without postman and internet dont user them just for testing 
Route::get('/reactions',[EventController::class, 'reactions']);




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
