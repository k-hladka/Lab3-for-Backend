<?php
function finedLines($fdFirstFile, $fdSecondFile, $mode=0){
    $index =0;
    while(!feof($fdFirstFile)){
        $z = 0;
        $strFirstFile = trim(htmlentities(fgets($fdFirstFile)));
        while(!feof($fdSecondFile)){
            $strSecondFile = trim(htmlentities(fgets($fdSecondFile)));
            if($strFirstFile === $strSecondFile)
                $z++;
        }
        if($mode === 0 && $z===0)
            $strResultArray[$index++] = $strFirstFile;
        if($mode === 1 && $z!==0 &&
            ((isset($strResultArray) && array_search($strFirstFile, $strResultArray) === false)  || !isset($strResultArray)))
            $strResultArray[$index++] = $strFirstFile;

        fseek($fdSecondFile, 0, 0);
    }

    return $strResultArray;
}
