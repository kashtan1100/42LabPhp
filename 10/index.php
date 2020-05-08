<?php
include "Methods.php";

$test = new Methods();

try {
    $test->method_first();
}
catch (\exc\firstException $test_first){
    echo 'Exception first ';
}
catch (\exc\secondException $test_second){
    echo 'Exception second ';
}
try {
    $test->method_second();
}
catch (\exc\secondException $test_second){
    echo 'Exception second ';
}
catch (\exc\thirdException $test_third){
    echo 'Exception third ';
}

try {
    $test->method_third();
}
catch (\exc\thirdException $test_third){
    echo 'Exception third ';
}
catch (\exc\fourException $test_four){
    echo 'Exception four ';
}

try {
    $test->method_four();
}
catch (\exc\fourException $test_four){
    echo 'Exception four ';
}

catch (\exc\fiveException $test_five) {
    echo("Exception five");
}