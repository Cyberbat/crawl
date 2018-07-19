<?php



Route::get('/', 'DomainController@index')->name('home');

Route::get('/form', 'DomainController@create');

Route::get('/body/{doamin}','DomainController@show');

Route::post('/formdom', 'DomainController@store');

Route::get('/projects', 'DomainController@selectdom');

Route::get('/deleteme/{domid}', 'DomainController@destroy');

Route::get('/editme/{domain}', 'DomainController@edit');

Route::post('/updatedom', 'DomainController@update');

Route::post('/addpost', 'PostController@store');



Route::get('/singlepost/{postid}', 'PostController@show');






