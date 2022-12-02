<?php
function createTable($count, $fd){
    $table = "<table><tr><th>Поле імен</th><th>Поле коментарів</th></tr>";
    for($i = 0; $i<$count; $i++){
        if($i % 2 === 0){
            $table .= "<tr>";
            $str = htmlentities(fgets($fd));
            $table .= "<td>{$str}</td>";
        }
        else{
            $str = htmlentities(fgets($fd));
            $table .= "<td>{$str}</td>";
            $table .= "</tr>";
            }
    }
    $table .= "</table>";
    return $table;
}
