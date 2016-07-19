<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Media\Http\Controllers\Admin'], function()
{
	Route::auth();
	// After the line that reads
	Route::get('upload', 'UploadController@index');

// Add the following routes
	Route::post('upload/file', 'UploadController@uploadFile');
	Route::delete('upload/file', 'UploadController@deleteFile');
	Route::post('upload/folder', 'UploadController@createFolder');
	Route::delete('upload/folder', 'UploadController@deleteFolder');
});
