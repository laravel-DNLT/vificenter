<?php

if ( !function_exists('theme')) {
    function theme($path) {


        return url(config('core.folder').'/'.config('core.active').'/assets/'.$path);
    }
}