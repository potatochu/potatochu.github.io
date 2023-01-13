<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;

//home
Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('home', 'index');
    Route::get('talent-scouting', 'scouting');
});

//Users
Route::controller(UsersController::class)->group(function () {
    Route::get('user', 'index')->name('user');
    Route::get('user/create', 'create');
    Route::post('user/store', 'store');
    Route::get('user/view/{id}', 'view');
    Route::get('user/edit/{id}', 'edit');
    Route::post('user/update/{id}', 'update');
    Route::post('user/profile-verify/{id}', 'verify');
    Route::get('user/verification', 'verification');
    Route::get('user/delete/{id}', 'delete');
});

//Companies
Route::controller(CompanyController::class)->group(function () {
    Route::get('company', 'index')->name('company');
    Route::get('company/create', 'create');
    Route::post('company/store', 'store');
    Route::get('company/view/{id}', 'view');
    Route::get('company/edit/{id}', 'edit');
    Route::post('company/update/{id}', 'update');
    Route::post('company/profile-verify/{id}', 'verify');
    Route::get('company/verification', 'verification');
    Route::get('company/delete/{id}', 'delete');
});

//Jobs
Route::controller(JobsController::class)->group(function () {
    Route::get('jobs', 'index')->name('jobs');
    Route::get('jobs/create', 'create');
    Route::post('jobs/store', 'store');
    Route::get('jobs/view/{id}', 'view');
    Route::get('jobs/edit/{id}', 'edit');
    Route::post('jobs/update/{id}', 'update');
    Route::post('jobs/profile-verify/{id}', 'verify');
    Route::get('jobs/verification', 'verification');
    Route::get('jobs/delete/{id}', 'delete');
});

//metadata


//auth
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'authenticate')->name('auth');
    Route::any('logout', 'logout')->name('logout');
    Route::get('forgot', 'forgot')->name('forgot');
});

//select country, state, city
use App\Models\Country;
use App\Models\States;
use App\Models\City;
Route::get('country/json', function (Country $model, Request $request) {
    return $model::where([['country_name','LIKE','%'.$request->get('q').'%']])->orderBy('country_name', 'asc')
    ->get(['country_id','country_name as text'])
    ->toJson();
});
Route::get('states/json/{id}', function (States $model, $id) {
    return $model::where([['country_id', $id]])->orderBy('states_name', 'asc')
    ->get(['states_id','states_name'])
    ->toJson();
});
Route::get('city/json/{id}', function (City $model, $id) {
    return $model::where([['city_state_id', $id]])->orderBy('city_name', 'asc')
    ->get(['city_id','city_name'])
    ->toJson();
});

