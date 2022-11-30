<?php
$strText = <<< Текст
ТеКсТ
тЕкСт
Текст;
$strSearch = <<< Знайти
ПоШуК
пОшУк
Знайти;
$strReplace = <<< Замінити
ЗаМіНа
зАмІнА
Замінити;
$strResult = <<< Результат
РеЗуЛьТат
рЕзУлЬТаТ
Результат;

echo "<mark>Було:</mark> <br>Текст: $strText <br>Знайти: $strSearch <br>
Замінити: $strReplace <br>Результат: $strResult<br>";

$strText = mb_strtolower($strText);
$strSearch = mb_strtoupper($strText);
$strReplace = str_replace('ЗаМіНа', 'ЗАМіна', $strReplace);
$strResult = str_replace('рЕзУлЬТаТ', 'РЕЗУЛЬТАТ', $strResult);

echo "<mark>Стало:</mark> <br>Текст: $strText <br>Знайти: $strSearch <br>
Замінити: $strReplace <br>Результат: $strResult<br>";


