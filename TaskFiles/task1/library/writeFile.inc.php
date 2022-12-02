<?php
function writeFile($array, $fd){
    foreach ($array as $value){
        fwrite($fd, "$value\n");
    }
}