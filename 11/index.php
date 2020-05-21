<?php
require_once 'FileLogget.php';
require_once 'BrowserLogger.php';
include 'form.html';

$text = $_POST['text'];
$log_Type = $_POST['logger'];
$del_text = explode("\n", $text);
$count = count($del_text);


for ($i = 0; $i < $count; $i++) {
    if (preg_match('/.*([A-Z]).*/', $del_text[$i])) {
        $del_text[$i] = "В строке <b><i>" . $del_text[$i] . "</b></i> есть заглавные буквы";
    }
    else {
        $del_text[$i] = "В строке <b><i>" . $del_text[$i] . "</b></i> нет заглавных букв";
    }
}

if ($log_Type == 'file') {
    $file_name = $_POST['file_name'];
    $logger = new Logger_File($file_name);
    for ($i = 0; $i < $count; $i++) {
        $logger->logger($del_text[$i]);
    }
}

if ($log_Type == 'browser') {
    $format = $_POST['date'];
    if ($format == 'date_only') {
        $logger = new Logger_Browser(date('H:i:s'));
    } else
        if ($format == 'date_time') {
            $logger = new Logger_Browser(date('F Y H:i:s'));
        }
        else {
            $logger = new Logger_Browser('');
        }

    for ($i = 0; $i < $count; $i++) {
        $logger->logger($del_text[$i]);
    }
}