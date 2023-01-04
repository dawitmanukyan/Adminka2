<?php 
    require "./admin-protection/protection.php";
    require "./config/config.php";

    if(isset($_POST['info'])){

        $info = $_POST['info'];
        $lang = $_POST['lang'];

        $mysql -> query("INSERT INTO `aboutus` (`info`,`lang`) VALUES ('$info','$lang')");

        header('location: Add-info.php?h='.$_GET['h'].'');
    }else {
        header('location: Add-info.php?h='.$_GET['h'].'');
    }
?>