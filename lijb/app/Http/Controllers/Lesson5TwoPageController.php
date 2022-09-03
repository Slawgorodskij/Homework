<?php

namespace App\Http\Controllers;

use App\Services\GetCache;
use Illuminate\Http\Request;

class Lesson5TwoPageController extends Controller
{
    public function index()
    {
        $cacheValues = app( GetCache::class)->getCache();
        return view('twoPage', [
            'title'=>'Домашнее задание 5-го урока',
            'cacheValues'=>$cacheValues,
            'cacheValuesJSON'=>json_encode($cacheValues),
        ]);
    }
}
