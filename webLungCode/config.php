
<?php
session_start();

$file_path = $_SERVER['SCRIPT_FILENAME'];
echo $file_path ;
$n = strpos($file_path, 'admin');
$app_folder = substr($file_path,0, $n);

echo "<br>",$app_folder;
define('APP_PATH', $app_folder);
define('UPLOAD_PATH', $app_folder.'/uploads');
define('HOST', 'localhost');
define('USER','root');
define('PASSWORD','');
define('DB','project_1');

spl_autoload_register(function ($class_name) {
    $class_path = APP_PATH.'libts/'.$class_name.'.php';
    if (file_exists($class_path)){
        //echo "<br>",$class_path;
        require $class_path;
    }else{
        echo "Class $class_path khong ton tai, vui long kiem tra";
        die();
    }
});

$app = new App();
?>