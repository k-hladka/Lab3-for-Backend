<?php
function sortCities(){
    if(isset($_POST['cities'])){
        $strArrayCities = explode(' ', $_POST['cities']);
        for($i=0; $i<count($strArrayCities)-1; $i++){
            for($j=$i+1; $j<count($strArrayCities); $j++){
                if($strArrayCities[$i] > $strArrayCities[$j]){
                    $tmp = $strArrayCities[$i];
                    $strArrayCities[$i] = $strArrayCities[$j];
                    $strArrayCities[$j] = $tmp;
                }
            }
        }
        return $strArrayCities;
}
    else
        return '';
}
echo "Результуючий масив: <br><pre>";
var_dump(sortCities());
echo "</pre>";


