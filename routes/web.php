<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/services/solar', 'solar-solutions')->name('solar-solutions');
Route::view('/services/hvac', 'hvac-solutions')->name('hvac-solutions');
Route::view('/partner', 'partner')->name('partner');
Route::view('/contact', 'contact')->name('contact');
Route::view('/quote', 'quote')->name('quote');

Route::redirect('/index.html', '/', 301);
Route::redirect('/about.html', '/about', 301);
Route::redirect('/services.html', '/services', 301);
Route::redirect('/solar-solutions.html', '/services/solar', 301);
Route::redirect('/hvac-solutions.html', '/services/hvac', 301);
Route::redirect('/partner.html', '/partner', 301);
Route::redirect('/contact.html', '/contact', 301);
Route::redirect('/quote.html', '/quote', 301);
