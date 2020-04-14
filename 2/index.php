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
    echo "<br>"."Изменений ".$counter;
}

function replace_change($str){
    foreach (replace_letter($str) as $value){
        echo $value;
    }
}

if (isset($_REQUEST['string'])) {
    //$req = replace_letter($_REQUEST['string']);
    $req = $_REQUEST['string'];
    replace_change($req);
} else {
    echo '<form action="index.php">
    string : <input type="text" name="string" value="">
    <input type="submit" value="Отправить">
</form>';

} ?>
</body>
</html>