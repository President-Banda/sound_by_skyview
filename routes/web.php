<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('providers', [
        'heading' => 'ready gigs',
        'owners' => [
            [
                'id' => 0000,
                'name' => 'Mekonko',
                'slug' => 'mekonko',
                'description' => 'Just want to give a quick shoutout 
                to the folks at @linode. I don\'t have to contact their 
                support team very often, but when I do they\'re always 
                super helpful and whatever issue I\'m having gets fixed 
                right away. Hands down my favorite hosting company of 
                the many I\'ve tried.',

            ],
            [
                'id' => 00001,
                'name' => 'Bootz',
                'slug' => 'bootz',
                'description' => 'Just want to give a quick shoutout 
                to the folks at @linode. I don\'t have to contact their 
                support team very often, but when I do they\'re always 
                super helpful and whatever issue I\'m having gets fixed 
                right away. Hands down my favorite hosting company of 
                the many I\'ve tried. '
            ],
            [
                'id' => 00002,
                'name' => 'Diplo',
                'slug' => 'diplo',
                'description' => 'Just want to give a quick shoutout 
                to the folks at @linode. I don\'t have to contact their 
                support team very often, but when I do they\'re always 
                super helpful and whatever issue I\'m having gets fixed 
                right away. Hands down my favorite hosting company of 
                the many I\'ve tried. '
            ],
            [
                'id' => 00003,
                'name' => 'Diplo',
                'slug' => 'diplo',
                'description' => 'Just want to give a quick shoutout 
                to the folks at @linode. I don\'t have to contact their 
                support team very often, but when I do they\'re always 
                super helpful and whatever issue I\'m having gets fixed 
                right away. Hands down my favorite hosting company of 
                the many I\'ve tried. '
            ]
        ]
    ]);
});
