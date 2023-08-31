<?php

use Illuminate\Support\Facades\Route;
use Parsed\Content;
use Parsed\ContentParser;

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
   dump(3123);
});

Route::get('/cp','ParseController');

Route::get('/parse', function() {
    // $lastPage = 10;
    // for($i=1; $i<=$lastPage; $i++){
    //     $crawler = Goutte::request('GET', 'https://shaurma-best.ru/menu/?page=2'.$i);
    //     $crawler->filter('.price')->each(function ($node) {
    //       echo($node->text().'<br/>');
    //     }); 
    // }

    // $lastPage = 5;
    // for($i=1; $i<=$lastPage; $i++){
    //     $crawler = Goutte::request('GET', 'https://nizhnii-novgorod.autospot.ru/used-car/?sort=-views_count&limit=12&page='.$i.'&mode=0');
    //     $marks = $crawler->filter('.car-card__title')->each(function ($node) {
    //       echo($node->text().'<br/>');
    //     }); 
    //     $title = $crawler->filter('.on-line-text__real-width')->each(function ($node) {
    //       echo($node->text().'<br/>');
    //     });
    //     var_dump($marks); 
    // }
    // return view('welcome');
});