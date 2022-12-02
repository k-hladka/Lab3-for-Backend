<?php
function finedTwiceLines($fdFirstFile, $fdSecondFile, $fd2){
    $index =0;
    while(!feof($fdFirstFile)){
        $z = 0;
        $strFirstFile = trim(htmlentities(fgets($fdFirstFile)));
        while(!feof($fdSecondFile)){
            $strSecondFile = trim(htmlentities(fgets($fdSecondFile)));
            if($strFirstFile === $strSecondFile){
                $z++;
                if($z >= 2){
                    while(!feof($fd2)){
                        $str2 = trim(htmlentities(fgets($fd2)));

                        if($strFirstFile === $str2 &&
                            ((isset($strResultArray) && array_search($strFirstFile, $strResultArray) === false)  || !isset($strResultArray))){
                            $strResultArray[$index++] = $strFirstFile;
                        }


                    }
                }

            }
        }
        fseek($fd2, 0,0);
        fseek($fdSecondFile, 0, 0);
    }

    return $strResultArray;
}
