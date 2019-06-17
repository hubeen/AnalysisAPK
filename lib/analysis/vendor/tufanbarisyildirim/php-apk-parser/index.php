<?php
    include '/var/www/html/AnalysisAPK/lib/analysis/vendor/autoload.php';
    
    session_start();
    //$dir_str = $_GET["lnk"];
    //$dir_str = $_POST["lnk"];
    $dir_str = $_SESSION['dir'];
    $apk = new \ApkParser\Parser($dir_str);

    $manifest = $apk->getManifest();
    $permissions = $manifest->getPermissions();
    
    /*
    echo '<pre>';
    echo "Package Name      : " . $manifest->getPackageName() . "" . PHP_EOL;
    echo "Version           : " . $manifest->getVersionName() . " (" . $manifest->getVersionCode() . ")" . PHP_EOL;
    echo "Min Sdk Level     : " . $manifest->getMinSdkLevel() . "" . PHP_EOL;
    echo "Min Sdk Platform  : " . $manifest->getMinSdk()->platform . "" . PHP_EOL;
    
    echo PHP_EOL;*/

    $_SESSION['per'] = $permissions;
    $_SESSION['pname'] = $manifest->getPackageName();
    $_SESSION['ver'] = $manifest->getMinSdk()->platform;
    
    echo "<script>location.replace('../../../../../result.php');</script>";
?>

