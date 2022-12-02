<?php
include_once('../task1/library/writeFile.inc.php');
function SortWords($fd){
    $array = explode(' ', htmlentities(file_get_contents($fd)));
    $length = count($array);
    for($i=0; $i<$length-1; $i++)
        for($j=$i+1; $j<$length; $j++){
            if($array[$i] > $array[$j]){
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }

return $array;
}

$d = fopen('ResultFile.txt', 'w');
writeFile(SortWords('FirstFile.txt'), $d);

//Головний файл не перезаписується, щоб було видно різницю
echo "Файл був: <pre>";
var_dump(file_get_contents('FirstFile.txt'));
echo "<br>Файл став: ";
var_dump(file_get_contents('ResultFile.txt'));
echo "</pre>";

fclose($d);