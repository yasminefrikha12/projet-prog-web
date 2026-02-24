<?php
if(isset($_GET['Gouvernorat'])) {
    $gouv = strtolower($_GET['Gouvernorat']); 

    if($gouv == "tunis") {
        header("Location: tunis.php");
        exit();
    } elseif($gouv == "djerba") {
        header("Location: djerba.php");
        exit();
    } elseif($gouv == "kairouan") {
        header("Location: kairouan.php");
        exit();
    } elseif($gouv == "bizerte") {
        header("Location: bizerte.php");
        exit();
    } elseif($gouv == "tataouine") {
        header("Location: tataouine.php");
        exit();
    }
}
?>