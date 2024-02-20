<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home');
//Route::get('/', function () {
//    //return view('welcome');
//    return 'The Vinyl Shop';
//});
Route::view('contact us', 'contact')->name('contact');
//Route::get('contact', function () {
//    // return 'Contact info';
//    return view('contact');
//});

//Route::get('admin/records', function (){
//    $records = [
//        'Queen - Greatest Hits',
//        'The Rolling Stones - Sticky Fingers',
//        'The Beatles - Abbey Road'
//    ];
//
//    return view('admin.records.index', [
//        'records' => $records
//    ]);
//});
Route::prefix('admin')->group(function () {
    Route::redirect('/', '/admin/records');
    Route::get('records', function (){
        $records = [
            'Queen - Greatest Hits',
            'The Rolling Stones - Sticky Fingers',
            'The Beatles - Abbey Road'
        ];
        return view('admin.records.index', [
            'records' => $records
        ]);
    });
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
