<?php

function lines_to_array(){
    $strings_array = $_REQUEST['strings'];

    return explode(PHP_EOL, $strings_array);
}

function random_string(array $string){
    $start_array_length = count($string);
    for($i=0; $i < $start_array_length; $i++){
        $now_string = $string[$i];
        $now_string = explode(" ", $now_string);
        shuffle($now_string);
        $collected_result = '';
        foreach ($now_string as $word){
            $collected_result .= $word.' ';
        }
        array_push($string, $collected_result);
    }
    return $string;
}

function second_word_sort($arrayString){
    for ($j = 0; $j < count($arrayString) - 1; $j++){
        for ($i = 0; $i < count($arrayString) - $j - 1; $i++){
            // если текущий элемент больше следующего
            $str1 = explode(' ', $arrayString[$i])[1];
            $str2 = explode(' ', $arrayString[$j])[1];
            if (strcmp($str1,$str2) == 1){
                // меняем местами элементы
                $tmp_var = $arrayString[$i + 1];
                $arrayString[$i + 1] = $arrayString[$i];
                $arrayString[$i] = $tmp_var;
            }
        }
    }
    return $arrayString;
}

if (isset($_REQUEST['strings'])) {
    $strings_array = lines_to_array();
    $strings_array = random_string($strings_array);
    $strings_array = second_word_sort($strings_array);
    foreach ($strings_array as $write){
        echo $write;
        echo '<br>';
    }
} else {
    include 'index.html';
}