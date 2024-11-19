<?php

function QuickSort($arr){
    
    if(count($arr)<2){
        return $arr;
    }
    
    $pivot = $arr[count($arr)-1];
    
    $let= [];
    $right = [];
    
    for($i=0; $i<count($arr)-1;$i++){
        if($arr[$i]<$pivot){
            $let[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }
return array_merge(QuickSort($let),[$pivot], QuickSort($right));
}

$array = [3,4,5,2,1,5,6,6,5,3,8];
$funcion = QuickSort($array);
print_r($funcion);
?>
