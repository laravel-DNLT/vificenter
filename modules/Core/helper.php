<?php

if ( !function_exists('theme')) {
    function theme($path) {


        return url(config('core.folder').'/'.config('core.active').'/assets/frontend/'.$path);
    }
}
if ( !function_exists('themeadmin')) {
    function themeadmin($path) {


        return url(config('core.folder').'/'.config('core.active').'/assets/backend/'.$path);
    }
}