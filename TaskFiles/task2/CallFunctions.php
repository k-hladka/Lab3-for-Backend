<?php
include_once('library/FinedLines.inc.php');
include_once('library/FseekFunc.inc.php');
include_once('library/LinesInTwoFilesTwice.inc.php');
include_once('../task1/library/writeFile.inc.php');

$fdFirstFile = fopen('txtFiles/FirstFileWithWords.txt', "r");
$fdSecondFile = fopen('txtFiles/SecondFileWithWords.txt', "r");

$f1 = finedLines($fdFirstFile, $fdSecondFile, 0);

echo "Рядки, які зустрічаються тільки в першому файлі: <pre>";
var_dump($f1);
echo "</pre><br>";


fseekFunc($fdFirstFile);
fseekFunc($fdSecondFile);

$f2 = finedLines($fdFirstFile, $fdSecondFile, 1);
echo "Рядки, які зустрічаються в обох файлах: <pre>";
var_dump($f2);
echo "</pre>";

fseekFunc($fdFirstFile);
fseekFunc($fdSecondFile);

$fdFirstFile2 = fopen('txtFiles/FirstFileWithWords.txt', "r");
$f3 = finedTwiceLines($fdFirstFile, $fdSecondFile, $fdFirstFile2);

echo "Рядки, які зустрічаються в кожному файлі більше двох разів: <pre>";
var_dump($f3);
echo "</pre>";

fseekFunc($fdFirstFile);
fseekFunc($fdSecondFile);
fseekFunc($fdFirstFile2);

$fdResult = fopen('txtFiles/ResultFile.txt', 'w+');
fwrite($fdResult, "****Рядки, які зустрічаються тільки в першому файлі:****\n");
writeFile($f1, $fdResult);

fwrite($fdResult, "****Рядки, які зустрічаються в обох файлах:****\n");
writeFile($f2, $fdResult);
fwrite($fdResult, "****Рядки, які зустрічаються в кожному файлі більше двох разів:****\n");
writeFile($f3, $fdResult);

fclose($fdResult);
fclose($fdFirstFile);
fclose($fdSecondFile);
fclose($fdFirstFile2);