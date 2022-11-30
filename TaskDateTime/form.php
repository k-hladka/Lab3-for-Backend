<?php
session_start();
include_once("library.inc.php");
/**@var string[] $monthArray */
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
<?php
$values = [
        'dayValue' => date('d'),
        'monthValue' => date('m'),
        'yearValue' => date('Y')
];
$arrayKeys = array_keys($values);
foreach($arrayKeys as $key){
    if(isset($_SESSION['$key']))
        $values[$key] = $_SESSION['$key'];
    if(isset($_POST[$key]))
        $values[$key] = $_SESSION['$key'] = $_POST[$key];
}
?>
<form action="handingForm.php" method="post">
    <table>
        <tr>
            <td>Введіть дату</td>
            <td>
                <?=createDate(1, 31, "day", $values['dayValue'])?>
                <?=createDate(1,12,"month", $values['monthValue'], $monthArray)?>
                <?=createDate(1970, date('Y'), "year", $values['yearValue'])?>
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
