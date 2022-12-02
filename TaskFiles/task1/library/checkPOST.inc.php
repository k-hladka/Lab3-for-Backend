<?php
function checkPOST($name, $str){
    if(isset($_POST[$name])) return $_POST[$name];
        return $str;
}

