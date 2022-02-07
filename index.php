<?php
function translate($char){
    $array = [' ','ABC','DEF','GHI','JKL','MNO','PQRS','TUV','WXYZ'];
    foreach($array as $key => $val) {
        $pos = strpos($val, $char);
        if($pos!==false) return str_repeat($key + 1, $pos + 1) . '|';
    }
}


$query = 'WALDEK I ZBYSZEK';
$array = str_split($query,1);


$ciag = '';
foreach($array as $key => $val){
    $ciag .= translate($val);
}
print_r($ciag);
