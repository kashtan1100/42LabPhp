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
    $strResult.="<br> Число замен ".$counter;
    return $strResult;
}

if (isset($_REQUEST['string'])) {
    $req = replace_letter($_REQUEST['string']);
    echo $req;
} else {
    include 'form.html';
}


//$mas = array('key'=>2);
//echo key;

//function replace_letter(string $str){
//    $mas = array('h' => 4, 'l' => 1, 'e' => 3, 'o' => 0);
//    $stringresult = '';
//    for ($i = 0; $i < strlen($str); $i++) {
//        $char = $str[$i];
//        if(array_search($char,$mas))
//            $stringresult.=$mas[$char];
//        else
//            $stringresult.=$char;
//    }
//    return $stringresult;
//}

//if (isset($_REQUEST['string'])) {
//    $req = replace_letter($_REQUEST['string']);
//    echo $result;
//} else {
//    include 'form.html';
//}