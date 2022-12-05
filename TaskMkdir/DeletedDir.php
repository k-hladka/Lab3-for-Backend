<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Видалення папки</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label>Login
            <input type="text" name="Login2" value="Woman">
        </label>
    </div>
    <div>
        <label>Password
            <input type="password" name="Password2" value="1112213">
        </label>
    </div>
    <div><button>Ok</button></div>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['Login2']){
    if($_SESSION['Login'] === $_POST['Login2'] && $_SESSION['Password'] === $_POST['Password2']){
        function deleteDir($nameDir){
                $dir = opendir($nameDir);
                while(($file = readdir($dir))!== false){
                    if($file != '.' && $file != '..'){
                        if (is_dir($nameDir."/".$file))
                            deleteDir($nameDir."/".$file);
                        else
                            unlink($nameDir."/".$file);
                    }
            }
            closedir($dir);
            rmdir($nameDir);
            return true;
        }

        if(is_dir($_POST['Login2'])){
            $result = deleteDir($_POST['Login2']);
            if($result === true)
                echo "Папка {$_POST['Login2']} успішно видалена";
        }
    }
    else
        echo 'Невірне введення логіну чи паролю!';
}
?>
</body>
</html>
