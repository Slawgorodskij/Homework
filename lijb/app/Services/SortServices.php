<?php

namespace App\Services;

class SortServices
{
    public function bubbleSort($array):array
    {
        for($i=0; $i<count($array); $i++){
            $count = count($array);
            for($j=$i+1; $j<$count; $j++){
                if($array[$i]>$array[$j]){
                    $temp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $temp;
                }
            }
        }
        return $array;
    }

    public function quickSort(&$arr, $low, $high)
    {
            $i = $low;
            $j = $high;
            $middle = $arr[ ( $low + $high ) / 2 ];
        do {
            while($arr[$i] < $middle) ++$i;
            while($arr[$j] > $middle) --$j;

            if($i <= $j){

               $temp = $arr[$i];
               $arr[$i] = $arr[$j];
               $arr[$j] = $temp;

               $i++; $j--;
            }
        }

        while($i < $j);

        if($low < $j){
            $this->quickSort($arr, $low, $j);
        }

        if($i < $high){
            $this->quickSort($arr, $i, $high);
        }
    }
}
