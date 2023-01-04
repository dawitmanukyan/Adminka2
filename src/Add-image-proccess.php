<?php
    require "./admin-protection/protection.php";
    require "./config/config.php";

    $protection = md5('semur');

    if(isset($_POST['image'])){
        $file = $_FILES['image'];
        $name = $file['name'];
        $pathFile = __DIR__.'/img/'.$name;
        if(!move_uploaded_file($file['tmp_name'], $pathFile)){
            echo 'Տվյալ Ֆայլը չեք կարող ներբեռնել!';
        }else {
            $mysql -> query("INSERT INTO `gallery` (`img`) VALUES ('$name')");
    
            header('location: Add-image.php?h='.$protection.'');
        }
    }else {
        echo 'moooormsh';
    }

?>  