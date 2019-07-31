<?php
session_start();
$target_dir = "../Proizvodi stranice/Galerija proizvoda/".$_POST['where']."/";
$target_file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('Odabrani fail ine slika.');</script>";
        $uploadOk = 0;
    }
}


// provera da li je slika ili gif ako nije ne moze biti uploadovana
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
{
    echo "<script>alert('Mozete dodati sao JPG, JPEG, PNG & GIF fajlove');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "<script>alert('Greska. Slika nije dodata.');</script>";
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

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.($lastImage[0]+1).".jpeg")) 
    {
        echo "<script>alert('Slika je dodata.');</script>";
        switch($_POST['where'])
        {
            case "Carsafi": header('location: ../Proizvodi stranice/CarsafiSaDugmetom.php?message=true');
                            break;
            case "Cebad":   header('location: ../Proizvodi stranice/CebadSaDugmetom.php?message=true');
                            break;
            case "Frotirani_carsafi": header('location: ../Proizvodi stranice/Frotirani carsafiSaDugmetom.php?message=true');
                            break;
            case "Jastucnice": header('location: ../Proizvodi stranice/JastucniceSaDugmetom.php?message=true');
                            break;
            case "Kuhinjske_krpe": header('location: ../Proizvodi stranice/Kuhinjske krpeSaDugmetom.php?message=true');
                            break;
            case "Peskiri": header('location: ../Proizvodi stranice/PeskiriSaDugmetom.php?message=true');
                            break;
            case "Posteljine": header('location: ../Proizvodi stranice/PosteljineSaDugmetom.php?message=true');
                            break;
            case "Step_deka": header('location: ../Proizvodi stranice/Step dekaSaDugmetom.php?message=true');
                            break;
            default:    session_destroy();
                        header('location: ../index.php');
        }
    } 
    else
    {
        echo "<script>alert('Greska. Slika nije dodata.');</script>";
    }
}
?> 