<?php

if ( !function_exists('theme')) {
    function theme($path) {


        return url(config('core.folder').'/'.config('core.active').'/assets/frontend/'.$path);
    }
}
if ( !function_exists('admin')) {
    function admin($path) {


        return url(config('core.folder').'/'.config('auth.admin').'/assets/'.$path);
    }
}