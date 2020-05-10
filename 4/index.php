<?php

function lines_to_array(){
    $strings_array = $_REQUEST['data'];
    $string = [];
    $mass = explode(PHP_EOL, $strings_array);
    foreach ($mass as $line){
        array_push($string, explode(' ', $line));
    }
    $sum = '';
    foreach ($string as $line){
        $sum .= $line[count($line)-1];
    }
    $date = [];
    foreach ($string as $line){
        $text = 0;
        for($i=0; $i<count($line)-2;$i++){
            $text .= $line[$i] . ' ';
        }
        $text += $line[count($line)-2];

        $weight['weight'] = $line[count($line)-1];

        $probability['probability'] = (1 / $sum) * $line[count($line) - 1];

        $current_string['text'] = $text;
        array_push($date, $current_string,$weight,$probability);
    }

    $mas['sum'] = $sum;
    $mas['date'] = $date;
    return $mas;
}


function parseJson(){
    $json = json_encode(lines_to_array(), JSON_UNESCAPED_UNICODE);
    echo $json;
}

if (isset($_REQUEST['data'])) {
    parseJson();
    print_r("<br/>"."<br/>");

}
else {
    echo
    '<form action="index.php">
    Data: <textarea name="data" cols="30", rows="5"></textarea>
    <input type="submit" value="Отправить">
    </form>';
}