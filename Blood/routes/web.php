<?php

use Illuminate\Support\Facades\Route;

use App\Models\Donor;
use App\Models\Patient;
use App\Models\Donation;
use App\Models\Achat;
use App\Models\Blood;

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
    return view('web.pages.index');
});

        Route::get('/dash', function () {
    return view('Users.dash')->with('donations' , Donation::all());
});
        Route::get('/update_profile', function () {
    return view('/update_profile');
})->name('profile');
        Route::get('/Donor/show', function () {
    return view('/Donor/show')->with('donors' , Donor::all());
})->name('show');
        Route::get('/Users/User', function () {
return view('/Users/User');
})->name('users');
        Route::get('/patient/show', function () {
    return view('/patient/show')->with('patients' , Patient::all());
})->name('patient.show');
        Route::get('/donation/donation', function () {
    return view('/donation/donation')->with('donations' , Donation::all()) ;
})->name('donation');
        Route::get('/requests/request', function () {
    return view('/requests/request')->with('requests' , Achat::all());
})->name('request');
        Route::get('/stock/stock', function () {
    return view('/stock/stock')->with('stocks' , Blood::all());
})->name('stock');

// Route::get('/profile', function () {
//     return view('profile.show');
// })->name('profile.show');

Route::get('/dashboard', function () {
    $data =['totaldonors' => Donor::count(),'totalpatients' => Patient::count() ,'totalAchats' => Achat::count(),'totalDonations' => Donation::count() ];
    return view('web.pages.dashboard',$data);
})->middleware(['auth'])->name('dashboard');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('web.pages.dashboard');
// })->name('dashboard');

require __DIR__.'/auth.php';


Route::get('donor.cfr/{id}', 'App\Http\Controllers\DonorController@confirm')->name('donor.cfr');
Route::get('donor.cld/{id}', 'App\Http\Controllers\DonorController@canceld')->name('donor.cld');
Route::get('patient.cfr/{id}', 'App\Http\Controllers\PatientController@confirm')->name('patient.cfr');
Route::get('patient.cld/{id}', 'App\Http\Controllers\PatientController@canceld')->name('patient.cld');
Route::post('/storeDonor', 'App\Http\Controllers\DonorController@store');
Route::post('/storePatient', 'App\Http\Controllers\PatientController@store');


// Route::get('dash/donors', 'App\Http\Controllers\DonorController@index')->name('donors');