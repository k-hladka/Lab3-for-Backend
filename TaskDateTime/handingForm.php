<?php
include_once("library.inc.php");
/**@var string[] $monthArray */

if(isset($_POST['year']) && isset($_POST['month']) && isset($_POST['day'])){
    $createInputDate = "{$_POST['year']}-{$_POST['month']}-{$_POST['day']}";
    $timestamp = strtotime($createInputDate);
    $checkedDate = date('Y-n-j', $timestamp);
    $resultDate = "{$monthArray[$_POST['month']]}-{$_POST['day']}-{$_POST['year']}";
    $res = ($createInputDate !== $checkedDate) ? 'Помилка введення дати!' : $resultDate;
    echo $res;
}