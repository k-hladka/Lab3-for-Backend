<?php
function writeArray($arrayLength, $nameArray, $commentArray){
    $indexForNameArray = 0;
    $indexForCommentArray = 0;
    for($i=0; $i<$arrayLength; $i++){
        if($i%2 === 0){
            if(isset($nameArray[$indexForNameArray]))
                $resultArray[$i] = $nameArray[$indexForNameArray++];
            else
                $resultArray[$i] = '';
        }
        else{
            if(isset($commentArray[$indexForCommentArray]))
                $resultArray[$i] = $commentArray[$indexForCommentArray++];
            else
                $resultArray[$i] = '';
        }
}
    return $resultArray;
}

