<?php
if(isset($_POST['fileName'])){
$directories = explode('\\', $_POST['fileName']);
$files = explode('.', $directories[count($directories)-1]);
echo "Ім'я файлу <mark>$files[0]</mark>";
}
