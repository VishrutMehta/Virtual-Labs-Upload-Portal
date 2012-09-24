<?php
$directory=$_POST['dir'];
$my_folder = "./vish/$directory/";
copy($_FILES["file"]["tmp_name"],$my_folder.$_FILES["file"]["name"]);
echo "File uploaded.";
header("Location: up.html");
?>
