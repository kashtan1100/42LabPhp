<?php
session_start();
if (isset($_REQUEST['text'])){
    $text = $_REQUEST['text'];
    $_REQUEST['text'] = $text;
    if (!isset($_REQUEST["text"])){
        setcookie("text", $text, time()+3600);
        $_REQUEST["text"] = $text;
    }
    header("Location: http://localhost:63342/12/hw2.php?text=$text");
}else{
    echo '<form action="hw2.php" method="post">
    <input type="text" name="text" value="">
    <input type="submit" name="button" value="submit">
</form>';
}