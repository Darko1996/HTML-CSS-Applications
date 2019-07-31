<?php 
    session_start();
    include 'scripts/db_connect.php';
    include 'scripts/encript-decript.php';

    $input = false;
    $invalidUsername =false;
    $invalidPassword=false;
    $username =null;
    $password=null;

    
    if(isset($_POST['login']))
    {   
        $input=true;
        $username = mysqli_real_escape_string($kon, $_POST['username']);
        $enc_username = enkripcija($username);
        $password = mysqli_real_escape_string($kon, $_POST['password']);
        $enc_password = enkripcija($password);

        $upit="SELECT * FROM registration WHERE username = '".$enc_username."'";
        $rezultat = $kon->query($upit);
        if($rezultat->num_rows > 0)
        {               
            $red = $rezultat->fetch_assoc();
            if($enc_password != $red['password'])
            {
                $invalidPassword = true;
            }
            else
            {
                $_SESSION['user'] = $enc_username;
                header('location: Add.php');             
            }
        }
        else
        {
            $invalidUsername = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The tire place of Jacksonville | Login</title>
    <meta property="og:site_name" content="Just Tires">
    <meta name="keywords" content="the tire place of jacksonwille,ford tires, jeep tires, bmw tires, toyota tires, mini cooper tires,tires, tires usa, tires florida, best tires, selling tires, summer tires, winter tires, suv tires, auto tires, van tires, bus tires, trucks tires, roadside assistance,roadside assistance florida,
    roadside assistance usa, the tire place of jacksonwille, tires for sale, tires for buying,cheepest tires in florida, best tires in florida, tires for vehicles">
    <meta name="description" content="Just Tires sells tires for every type of vehicle. Find sport tires for your Jeep, everyday tires for your Toyota, or winter tires for your Mini Cooper. Best price in the town and service quality guarantee. ">
    <meta name="THE TIRE PLACE OF JACKSONWILLE" content=",">
    <link rel="icon" href="Slike/ikonica.png">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="Login.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header id="showcase" class="grid">
        <a href="index.php"><div class="logo"><img src="Slike/logo.png" alt=""></div></a>
        <div class="navTekst">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="Tires.php"><li>Tires</li></a>
                <a href="About us.php"><li>About us</li></a>
                <a href="Contact.php"><li>Contact</li></a>
            </ul>
        </div>
    <!-- login forma -->
    <div class="login-page">
            <div class="form">
              <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="Password"/>
                <input type="text" placeholder="Adress"/>
                <button>create</button>
              </form>
              <form acrtion="" method="POST" class="login-form">
                <input type="text" name="username" placeholder="Name" <?php echo "value='".$username."'"; ?>/>
                <?php  
                    if($username == "" && $input==true)
                    {
                        echo '<b style="color: red;">* Please enter your username</b>';
                    }
                    else if($invalidUsername == true)
                    {
                        echo '<b style="color: red;">* Invalid username.</b>';         
                    }
                ?>
                <input type="password" name="password" placeholder="Password"/>
                <?php 
                    if($password == "" && $input==true )
                    {
                        echo '<b style="color: red;">* Please enter your password</b>';
                    }
                    else if($invalidPassword == true)
                    {
                        echo '<b style="color: red;">* Invalid password</b>';               
                    }
                ?>
                <input class="Login" type="submit" name="login" value="Sign in">
              </form>
            </div>
          </div>
    
    <!-- footer -->
    <div class="end-footer">
            <div class="ikonice">
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/TIRE-PLACE-of-Jacksonville-177812429708709/"><i class="fab fa-facebook-square"></i></a>
            </div>
            <div><p> The tire place of JACKSONVILLE</p></div>
            <div class="darpet-link"><p>All rights reserved © 2018 by</p> <a href="http://www.darpetdev.com/" target="_blank">Darpet team</a></div>
    </div>
</footer>


<!-- za animacije -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
   AOS.init();
 </script>
 <!-- jquery za smoth scroll -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</body>
</html>