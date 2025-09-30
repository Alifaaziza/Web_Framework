<?php

use Illuminate\Support\Facades\Route;

// 1. HOME
Route::get('/', function () {
    return 'HOME PAGE - Welcome to our website!';
});

// 2. ABOUT
Route::get('/about', function () {
    return 'ABOUT PAGE - Learn more about us';
});

// 3. PROGRAM dengan PARAMETER
Route::get('/program/{id?}', function ($id = null) {
    return $id ? "PROGRAM DETAIL - Program ID: $id" : 'PROGRAM LIST - All programs';
});

// 4. OUR TEAM dengan GROUP
Route::prefix('team')->group(function () {
    Route::get('/', function () {
        return 'TEAM PAGE - Our team members';
    });
    
    Route::get('/{id}', function ($id) {
        return "TEAM MEMBER - Member ID: $id";
    });
});

// 5. CONTACT US
Route::get('/contact', function () {
    return 'CONTACT PAGE - Get in touch with us';
});

// 6. REDIRECT
Route::redirect('/about-us', '/about');

// 7. FALLBACK (harus paling bawah)
Route::fallback(function () {
    return '404 - Page not found';
});