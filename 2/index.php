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
    $strResult = '';
    $counter =0;
    for ($i = 0; $i < strlen($str); $i++) {
        switch ($str[$i]) {
            case 'h' :
                $replaced_char = '4';
                $counter++;
                break;
            case 'i' :
                $replaced_char = '1';
                $counter++;
                break;
            case 'e' :
                $replaced_char = '3';
                $counter++;
                break;
            case 'o' :
                $replaced_char = '0';
                $counter++;
                break;
            default :
                $replaced_char = $str[$i];
        }
        $strResult .= $replaced_char;
    }
    if($strResult == '42')
        $strResult = 'WHAT DO YOU GET IF YOU MULTIPLY SIX BY NINE? <br> '.$strResult;
    $strResult.="<br> Число замен ".$counter;
    return $strResult;
}

if (isset($_REQUEST['string'])) {
    $req = replace_letter($_REQUEST['string']);
    echo $req;
}
else{
    echo '<form action="index.php">
    string : <input type="text" name="string" value="">
    <input type="submit" value="Отправить">
</form>';

}?>
</body>
</html>