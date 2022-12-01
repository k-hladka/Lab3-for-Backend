<?php
include_once("library.inc.php");
/**@var string[] $monthArray */
/**@var string[] $values */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="handingForm.php" method="post">
    <table>
        <tr>
            <td>Введіть дату</td>
            <td>
                <?=createDate(1, 31, 'day', $values['day'])?>
                <?=createDate(1,12,'month', $values['month'], $monthArray)?>
                <?=createDate(1970, date('Y'), 'year', $values['year'])?>
            </td>
        </tr>
        <tr>
            <td>
                <button>Перевірити</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
