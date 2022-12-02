<?php
include_once('library/writeArrayValues.inc.php');
include_once('library/checkPOST.inc.php');
include_once('library/writeFile.inc.php');
include_once('library/createTable.inc.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Запис файлу</title>
    <link rel="stylesheet" href="styleTask1.css">
</head>
<body>
<form action="" method="post">
    <div>
        <label>Ім'я
            <textarea name="name"><?= checkPOST('name', 'Іван');?></textarea>
        </label>
    </div>
    <div>
        <label>Коментар
            <textarea name="comment" ><?= checkPOST('comment', 'Працював на фірмі 10 років тому');?></textarea>
        </label>
    </div>
    <div>
        <button>Записати</button>
    </div>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nameArray = explode("\r\n", $_POST['name']);
        $commentArray = explode("\r\n", $_POST['comment']);
        $maxCount = (count($nameArray)>count($commentArray)) ? count($nameArray) : count($commentArray);
        $arrayLength = $maxCount*2;
        $array = writeArray($arrayLength, $nameArray, $commentArray);

    $fd = fopen('file.txt', 'w+');
    writeFile($array, $fd);
    fseek($fd, 0, SEEK_SET);

    echo createTable($arrayLength, $fd);
    fclose($fd);
}
?>
</body>
</html>
