<?php

if(isset($_POST['submit']) && $_POST['email'] != ''){
    $name=$_POST['name'];
    $emailfrom=$_POST['email'];
    $msg=$_POST['message'];
    
    $emailto='nickspanosf1@gmail.com';
    $headers='From Portfolio ';
    $txt="You have received an e-mail from ".$name." ".$emailfrom ."\r\n"."$msg";
    mail($emailto,$headers,$txt);

    header("Location:index.html?Mailsend:mailfailed");
}else
{
    echo '<h1>MAIL SEND FAILED </h1>';
}