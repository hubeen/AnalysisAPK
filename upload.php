<?php
session_start();
$uploaddir = '/var/www/html/AnalysisAPK/uploads/';
$ck_arr = array("application/vnd.android.package-archive", "application/apk", "application/java-archive");

ob_start();
$callback = &$_REQUEST['fd-callback'];

if (!empty($_FILES['fd-file']) and is_uploaded_file($_FILES['fd-file']['tmp_name'])) {
    $name = $_FILES['fd-file']['name'];
    $type = $_FILES['fd-file']['type'];
    $data = file_get_contents($_FILES['fd-file']['tmp_name']);
}else{
    $name = urldecode(@$_SERVER['HTTP_X_FILE_NAME']);
    $type = urldecode(@$_SERVER['HTTP_X_FILE_TYPE']);
    $data = file_get_contents("php://input");

}

if(in_array($type, $ck_arr)){
    file_put_contents($uploaddir . basename($name), $data);
    $_SESSION['dir'] = $uploaddir . basename($name);
    $_SESSION['fname'] = $name;
}


/*
$uploaddir = '/var/www/html/AnalysisAPK/uploads/';
$uploadfile = $uploaddir . basename($_FILES['fd-file']['name']);
                                  //$_FILES['fd-file']
if (move_uploaded_file($_FILES['fd-file']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
        
} else {
        echo "Possible file upload attack!\n";
        
}
 */
    //header("Location: http://hubeen.kr/AnalysisAPK/lib/ref/vendor/php-apk-parser/anal/?lnk=$uploadfile"); 
?>
