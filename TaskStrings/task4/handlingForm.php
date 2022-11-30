<?php
if(isset($_POST['date1']) && isset($_POST['date2'])){
    $timestamp1 =  strtotime($_POST['date1']);
    $timestamp2 =  strtotime($_POST['date2']);

    $numberDifference = abs(round(($timestamp2 - $timestamp1)/(60*60*24)));
    echo "Результат різниці дат: $numberDifference днів";
}

