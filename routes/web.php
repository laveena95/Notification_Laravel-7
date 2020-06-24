<?php

use Illuminate\Support\Facades\Route;


use App\Notifications\courseUpdated;
use App\User;

Route::get('/', function () {
    //User::find(1)->notify(new courseUpdated);
    //$users=User::all();
    //Notification::send($users, new courseUpdated());
    return view('welcome');
});

Auth::routes();

//new

Route::get('/story-add',function(){
    return view('stories.story-add');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/story','StoriesController@index')->name('story.list');
    Route::get('/story/add','StoriesController@create')->name('story.add');
    Route::post('/story','StoriesController@store')->name('story.save');
    Route::get('/story/view/{id}', 'StoriesController@view')->name('story.view');
});
