<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php

function replace_letter(string $str)
{
    //$strResult = '';
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        switch ($str[$i]) {
            case 'h' :
                $counter++;
                yield '4';
                break;
            case 'i' :
                $counter++;
                yield '1';
                break;
            case 'e' :
                $counter++;
                yield '3';
                break;
            case 'o' :
                $counter++;
                yield '0';
                break;
            default :
                yield $str[$i];
        }
    }
    yield "<br>"."Изменений ".$counter;
}

function replace_change($str){
    $new_string = '';
    foreach (replace_letter($str) as $value){
        $new_string .= $value;
    }
    return $new_string;
}

if (isset($_REQUEST['text'])) {
    $req = $_REQUEST['text'];
    echo replace_change($req);
} else {
    include "index.php";
}
 ?>
</body>
</html>