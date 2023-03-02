<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Create student
 * '/create' is the url
 * 'store' is a method defined in StudentController
 * i.e. http://127.0.0.1:8000/api/create
 */
Route::post('/create', [StudentController::class, 'store']);

/**
 * get all students
 * '/all' is the url
 * 'index' is a method defined in StudentController
 * i.e. http://127.0.0.1:8000/api/create
 */
Route::get('/all', [StudentController::class, 'index']);
//

Route::get('/all/{id}', [StudentController::class, 'show']);
