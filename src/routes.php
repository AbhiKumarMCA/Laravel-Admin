<?php

Route::get('admin', function(){
    echo 'Hello from the Laravel Admin Panel ADMIN!';
});

Route::get('login', function(){
    echo 'Hello from the Laravel Admin Panel LOGIN!';
});

Route::get('logout', function(){
    echo 'Hello from the Laravel Admin Panel LOGOUT!';
});