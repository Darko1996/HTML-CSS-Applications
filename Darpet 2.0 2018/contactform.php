<?php 
    if(isset($_POST['Send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $mailto = "darpet@darpetdev.com";
        $headers = "From: ".$email;
        $txt = "You have received an e-mail from: " .$name.".\n\n".$message;
        
        
        mail($mailto, $txt, $headers);
        header("Location: http://www.darpetdev.com?mailsent");
        
    } else {
        echo "Something went wrong";
    }