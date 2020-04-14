<?php

//function regex_check($password){
//    $reg = "(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{8,}";
//    if(!preg_match($reg, $password)){
//        echo 'Капец';
//    }
//}

function regex($password)
{
    $reg_one = "/^\S{10,}$/";
    if (!preg_match($reg_one, $password)) {
        echo 'Меньше чем 10</br>';
    }

    $reg_two_num = "/(\S*\d+\S*){2,}/";
    if (!preg_match($reg_two_num, $password)) {
        echo 'Строка не содержит по крайней мере 2 чисел </br>';
    }

    $reg_two_uppercase = "/^(.*?[A-Z]){2,}.*$/";
    if (!preg_match($reg_two_uppercase, $password)) {
        echo 'Строка не содержит по крайней мере 2 прописных буквы</br>';
    }

    $reg_two_lowercase = "/^(.*?[a-z]){2,}.*$/";
    if (!preg_match($reg_two_lowercase, $password)) {
        echo 'Строка не содержит по крайней мере 2 строчных буквы</br>';
    }

    $reg_two_spec = "/^(.*?[%$#_*]){2,}.*$/";
    if (!preg_match($reg_two_spec, $password)) {
        echo 'Строка не содержит не менее 2 %$#_*</br>';
    }

    $reg_three_uppercase_contract = "/[A-Z]{3,}/";
    if(preg_match($reg_three_uppercase_contract, $password)){
        echo 'Пароль содержит более 3 заглавных букв подряд</br>';
    }

    $reg_three_lowercase_contract = "/[a-z]{3,}/";
    if(preg_match($reg_three_lowercase_contract, $password)){
        echo 'Пароль содержит более 3 прописных букв подряд</br>';
    }

    $reg_three_num_contract = "/[0-9]{3,}/";
    if(preg_match($reg_three_num_contract, $password)){
        echo 'Пароль содержит более 3 цифр подряд</br>';
    }

    $reg_three_spec_contract = "/[%$#_*]{3,}/";
    if(preg_match($reg_three_spec_contract, $password)){
        echo 'пароль содержит более 3 спецсимволов подряд</br>';
    }
}


if (isset($_REQUEST['password'])) {
    regex($_REQUEST['password']);
} else {
    echo '<form action="index.php">
    Password: <input type="text" name="password" value="">
    <input type="submit" value="Check">
</form>';
}