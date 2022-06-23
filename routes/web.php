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
    $data = [
        'nomePizzeria' => 'Napul\'è',
        'nomePizzaiolo' => 'Mario Esposito',
        'siamoAperti' => true
    ];
    return view('home', $data);
})->name('home');

Route::get('/menu', function() {
    $menu = [
        'pizze' => [
            [
                'nome' => 'Marinara',
                'ingredienti' => 'Pomodoro, Aglio, Origano, Olio EVO'
            ],
            [
                'nome' => 'Margherita',
                'ingredienti' => 'Pomodoro, Mozzarella, Grana, Basilico, Olio EVO'
            ],
            [
                'nome' => 'Napoli',
                'ingredienti' => 'Pomodoro, Mozzarella, Acciughe, Capperi, Basilico, Olio EVO'
            ],
            [
                'nome' => '4 stagioni',
                'ingredienti' => 'Pomodoro, Mozzarella, Prosciutto cotto, Funghi, Carciofi, Olive nere'
            ],
            [
                'nome' => '4 formaggi',
                'ingredienti' => 'Pomodoro, Mozzarella, Gorgonzola, Scamorza, Grana'
            ]
        ],
        'dolci' => ['Tiramisù', 'Panna cotta', 'Caprese', 'Babà']
    ];
    return view('menu', $menu);
})->name('menu');

Route::get('/pizzeria', function () {
    return view('pizzeria');
})->name('restaurant');