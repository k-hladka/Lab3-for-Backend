<?php
$monthArray = [
    1 => 'Січень',
    'Лютий',
    'Березень',
    'Квітень',
    'Травень',
    'Червень',
    'Липень',
    'Серпень',
    'Вересень',
    'Жовтень',
    'Листопад',
    'Грудень'
];
function createDate($firstIndex, $lastIndex, $name, $value=null, $month=null){
    $str = "<select name=\"$name\">";
    for($i=$firstIndex; $i<=$lastIndex; $i++){
        if($month !== null)
            $titles = $month[$i];
        else
            $titles = $i;

        if($value == $i)
            $select = 'selected';
        else
            $select = '';
        $str .= "<option {select} value=\"$i\">$titles</option>";
    }
    $str .= "</select>";
    return $str;
}