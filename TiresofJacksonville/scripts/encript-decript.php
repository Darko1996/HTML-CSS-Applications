<?php

function enkripcija($string) //funkcija za enkripciju poruke
{
    $izlaz = false;
	 
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'american and bosnian';
    $secret_iv = 'american and bosnian';
 
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $izlaz = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $izlaz = base64_encode($izlaz);
    
    return $izlaz;
}

function dekript($string) //funkcija za dekripciju texta
{
    $izlaz = false;
     
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'american and bosnian';
    $secret_iv = 'american and bosnian';
     
    $key = hash('sha256', $secret_key);
        
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $izlaz = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
       
    return $izlaz;
}

?>