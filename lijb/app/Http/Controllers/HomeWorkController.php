<?php

namespace App\Http\Controllers;

use App\Services\SortServices;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class HomeWorkController extends Controller
{
    public function taskOne()
    {
         echo 1;
         $this->taskOne();
    }


    public function taskTwo()
    {
       $arrayNumber = [1,4,6,10,12,15,65,0,3,24,32,5,10,8];
       Log::info('Начало выполнения пузырьковой сортировки', [
           Carbon::now()
       ]);

       $arraySort = app(SortServices::class)->bubbleSort($arrayNumber);

       print_r($arraySort);
       Log::info('Окончание выполнения пузырьковой сортировки', [
           Carbon::now()
       ]);
    }

    public function taskThree()
    {
       $arrayNumber = [1,4,6,10,12,15,65,0,3,24,32,5,10,8];
       Log::info('Начало выполнения быстрой сортировки', [
           Carbon::now()
       ]);

       app(SortServices::class)->quickSort($arrayNumber, 0, count($arrayNumber) - 1);

       print_r($arrayNumber);
       Log::info('Окончание выполнения быстрой сортировки', [
           Carbon::now()
       ]);
    }
}
