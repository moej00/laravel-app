<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


#get All lists

Route::get('/', [ListingController::class, 'index']);

// Route::get('/listings/{id}', function($id){
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     }else{
//         abort ('404');
//     }
// });

# Show create form

Route::get('listings/create', [ListingController::class, 'create']);

#Store listings data
Route::post('/listings', [ListingController::class, 'store']);


#Edit Form
Route::get('/listings/{listing}/edit' ,[ListingController::class,'edit']);

# Update  List
Route::put('/listings/{listing}',[ListingController::class,'update']);

#Delete List
Route::delete('/listings/{listing}',[ListingController::class,'delete']);

#Get single list
Route::get('/listings/{listing}', [ListingController::class, 'show']);

#show register form
Route::get('/register',[UserController::class, "create"]);

#create new user
Route::post('/users', [UserController::class, 'store']);
