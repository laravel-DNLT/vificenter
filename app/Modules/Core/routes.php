<?php

Route::group(array('module' => 'Core', 'namespace' => 'App\Modules\Core\Controllers'), function() {

    Route::resource('/','CoreController');
    
});	