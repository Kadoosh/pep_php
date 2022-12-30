<?php 

$a = ['a','b','c','d','d'];
$b = ['b','c','e'];

$a = arrayUni($a);
$c = arrayDiff($b, $a);
$d = arrayDiff($b, $c);
$a = arrayDiff($a, $d);
$c = arrayMerge($a, $c);

print_r($c);

$a = ['a','b','c','d','d'];
$b = ['b','c','e'];

$a = array_unique($a);
$c = array_diff($b, $a);
$d = array_diff($b, $c);
$a = array_diff($a, $d);
$c = array_merge($a, $c);

print_r($c);




function arrayDiff(array $arr1, array $arr2){
    foreach ($arr1 as $key => $value) {
        if (!in_array($value, $arr2)) {
            $diff[$key] = $value;
        }  
    }
    return $diff;
}

function arrayInter(array $arr1, array $arr2){
    foreach ($arr1 as $key => $value) {
        if (in_array($value, $arr2)) {
            $equal[$key] = $value;
        }
    }
    return($equal);
 }

 function arrayMerge(array $arr1, array $arr2 ){
    $index = count($arr1);
    foreach ($arr2 as $value) {
        $arr1[$index] = $value;
        $index++;
    }
    return($arr1);
}

function arrayUni(array $arr){
    $arr2 = [];
    foreach ($arr as $value) {
            if (!in_array($value ,$arr2)) {
                $arr2[] = $value;  
            }
    }
    return($arr2);
}
?>