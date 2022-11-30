<?php
if(isset($_POST['date1']) && isset($_POST['date2'])){
    $timestamp1 =  strtotime($_POST['date1']);
    if($timestamp1 == false){
        echo "Помилка введення першої дати!";
        return;
    }

    $timestamp2 =  strtotime($_POST['date2']);
    if($timestamp2 == false){
        echo "Помилка введення другої дати!";
        return;
    }
    $numberDifference = round(($timestamp2 - $timestamp1)/(60*60*24));
    $numberDifference = abs($numberDifference);
    echo "Результат різниці дат: $numberDifference днів";
}

