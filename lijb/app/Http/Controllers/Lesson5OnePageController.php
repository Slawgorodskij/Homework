<?php

namespace App\Http\Controllers;


use App\Services\AddCache;
use App\Services\SortServices;

class Lesson5OnePageController extends Controller
{
   public function index()
   {
       app(AddCache::class)->addCache();

       return view('home', [
           'title'=>'Домашнее задание 5-го урока',
       ]);
   }
}
