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

Route::resources([
    'adminExperience' => 'AdminXpController',
    'adminFormation' => 'AdminFormationController',
    'adminHobbies' => 'AdminHobbyController',
    'adminProfil' => 'AdminProfilController',
    'profile' => 'ProfileController',
    'hobbies' => 'HobbiesController',
    'formation' => 'FormationsController',
    'experience' => 'ExperiencesController'
]);


Route::get('home', function() { 
    return view('home');
});
Route::get('/', function() { 
    return view('home');
});