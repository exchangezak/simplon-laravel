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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');

Route::get('levels', 'LevelController@index')->name('levels');
//on cree la route pour afficher le formulaire de creation
Route::get('levels/create','LevelController@create')->name('levels.create');
//on cree la route qui va nous permettre se sauvegarder un nouveau level dans la bdd
// ca sera une route en post
Route::post('levels','LevelController@store')->name('levels.store');
Route::get('levels/{level}', 'LevelController@show')->name('levels.show');
//on crée la route en get qui va nous permettre d'éditer un level
Route::get('levels/{level}/edit','LevelController@edit')->name('levels.edit');
// on crée al route qui va nous permettre a jour un level a partir du formulaire sur le template edit.blade.php dans le repertoire ressources/view/level
Route::put('levels/{level}','LevelController@update')->name('levels.update');
//on crée la route pour delete
Route::delete('levels/{level}','LevelController@destroy')->name('levels.delete');



Route::get('skills', 'SkillController@index')->name('skill');
Route::get('skills/create', 'SkillController@create')->name('skills.create');
Route::post('skills', 'SkillController@store')->name('skills.store');
Route::get('skills/{skill}', 'SkillController@show')->name('skills.show');

Route::get('skills/{skill}/edit', 'SkillController@edit')->name('skills.edit'); 
Route::put('skills/{skill}', 'SkillController@update')->name('skills.update');

Route::delete('skills/{skill}', 'SkillController@destroy')->name('skills.delete');



// Route::get('skills/{skill}',function($skills){
// return 'vous avez demandé le skill'.$skills;
// });