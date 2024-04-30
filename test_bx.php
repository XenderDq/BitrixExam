<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
//
//$array = [];
//
//$i = 0;
//while ($i < 2) {
//    $i++;
//    $j = 0;
//    while ($j < 10) {
//        $j++;
//        $arrayItem = [];
//        $k = 0;
//        while ($k < 5) {
//            $k++;
//            $arrayItem = rand(0,33);
//            if ($k%2 == rand(0,1)) {
//                $array[$i][$j][] = $arrayItem;
//            }
//        }
//    }
//}
//
////получить массив $arrayResult,
//// где каждая строка - это сумма всех чисел внутри 1го уровня массива $array, если:
//// - они меньше 10 +++
//// - если массив меньше 3х элементов
//
//$arrayResult = [];
////твой код
//$sum = 0;
//
//$a = 0;
//function Sum($array) {
//    $sum = 0;
//    foreach ($array as $i => $item) {
//        if (is_array($item)) {
//            $sum += Sum($item);
//        }
//        $a = $i;
//        elseif (is_int($item) && $item < 10 && isset($i )) {
//            $sum += $item;
//        }
//    }
//    return $sum;
//}
//
//foreach ($array as $item) {
//    $arrayResult[] = Sum($item);
//}
//
////
////foreach ($array as $i => $item) {
////    $sum = 0;
////    foreach ($item as $i1 => $item1) {
////        foreach ($item1 as $i2 => $item2) {
////            foreach ($item2 as $i3 => $item3) {
////                if ($item3 <10) {
////                    $sum =  $sum + $item3;
////                 }
////            }
////        }
////    }
////    $arrayResult[] = $sum;
////}
////?>
<!---->
<!--<pre>--><?//var_dump($arrayResult)?><!--</pre>-->
<!--<pre>--><?//var_dump($array)?><!--</pre>-->
