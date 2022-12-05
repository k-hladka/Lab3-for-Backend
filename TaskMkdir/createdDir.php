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
    <title>Створення папки</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label>Login
            <input type="text" name="Login" value="Woman">
        </label>
    </div>
    <div>
        <label>Password
            <input type="password" name="Password" value="1112213">
        </label>
    </div>
    <div><button>Ok</button></div>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['Login']){
        if(!is_dir("{$_POST['Login']}")){
            $_SESSION['Login'] = $_POST['Login'];
            $_SESSION['Password'] = $_POST['Password'];
            mkdir("{$_POST['Login']}");

            mkdir("{$_POST['Login']}/video");
           $vd = fopen("{$_POST['Login']}.video.txt", 'w');
            rename("{$_POST['Login']}.video.txt", "{$_POST['Login']}/video/{$_POST['Login']}.video.txt");
            fclose($vd);

            mkdir("{$_POST['Login']}/music");
           $md = fopen("{$_POST['Login']}.music.txt", 'w');
            rename("{$_POST['Login']}.music.txt", "{$_POST['Login']}/music/{$_POST['Login']}.music.txt");
            fclose($md);

            mkdir("{$_POST['Login']}/photo");
           $pd = fopen("{$_POST['Login']}.photo.txt", 'w');
            rename("{$_POST['Login']}.photo.txt", "{$_POST['Login']}/photo/{$_POST['Login']}.photo.txt");
            fclose($pd);

            echo "Створена папка {$_POST['Login']}";
        }

        else
            echo 'Така папка вже існує!';
    }
?>
</body>
</html>
