<?php

namespace App\Services;

class QuickSortService
{

    public function sort(Array $array)
    {
        $count = count($array);

        if($count<=1) return $array;

        $baseValue = $array[0];

        $leftArr = [];
        $rightArr = [];

        for ($i=1;$i<$count;$i++){
            if($baseValue>$array[$i]) {
                $leftArr[] = $array[$i];
            }   else {
                $rightArr[] = $array[$i];
            }
        }

        $leftArr = $this->sort($leftArr);
        $rightArr = $this->sort($rightArr);

        return array_merge($leftArr, array($baseValue), $rightArr);
    }
}
