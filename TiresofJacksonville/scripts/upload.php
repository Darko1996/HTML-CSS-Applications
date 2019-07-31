<?php
include 'db_connect.php';

$target_dir = "../Slike/tires/";
$uploadOk = 1;
$target_file = basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$price = null;
$error = false;
$newImage = null;
$message = null;
if(isset($_POST['confirm']))
{
    $price = mysqli_real_escape_string($kon, $_POST['price']);

    if($price == "" || !is_numeric($price))
        $error = true;

    if ($_POST['manufacturers'] == "Manufacturers")
        $error = true;

    if($_POST['width'] == "Width")
        $error = true;
    
    if($_POST['heigh'] == "Heigh")
        $error = true;

    if($_POST['diameter'] == "Diameter")
        $error = true;

    if($_POST['seasons'] == "Seasons")
        $error = true;
    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
    {
        $uploadOk = 1;
    } 
    else 
    {
        $uploadOk = 0;
    }
}

// provera da li je slika ili gif ako nije ne moze biti uploadovana
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
{
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    $error = true;
// if everything is ok, try to upload file
} 
else 
{
    $files = glob($target_dir.'*.*');
    $lastImeage = null;
    foreach ($files as $i) 
    {
        $lastImeage = $i;
    }
    $pom = explode('/', $lastImeage);
    $lastImage = explode('.', $pom[4]);
    $newImage = $target_dir.($lastImage[0]+1).".jpeg";

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newImage)) 
    {} 
    else
    {
        $error = true;
    }
}


if($error == false)
{
    $upit = "INSERT INTO `tire` (`id`, `price`, `manufactures`, `width`, `height`, `diameter`, `seasons`, `image`) 
    VALUES (NULL, '".$price."', '".$_POST['manufacturers']."', '".$_POST['width']."', '".$_POST['heigh']."', 
    '".$_POST['diameter']."', '".$_POST['seasons']."', '".$newImage."');";

    if ($kon->query($upit) === TRUE) 
    {
       ///// header("location: ../Add.php?message=ok");
    } 
    else 
    {
//header("location: ../Add.php?message=error");
    }
        
    $kon->close();     
}
else
{
    //header("location: ../Add.php?message=errorinput");
}
?>