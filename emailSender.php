<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$configs = include('config.php');

$mailer = new PHPMailer();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    
    try {
        $mailer->isSMTP();


        $mailer->Host = 'smtp.hostinger.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = $configs->mailUsername;
        $mailer->Password = $configs->mailPass;
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = 587;
        $mailer-> SMTPAuth = true;


        $mailer->setFrom('estimates@EuroTopPainting.com', 'Estimate');
        $mailer->addAddress('proendergamer03@gmail.com', 'Visar Ramadani');

        $mailer->isHTML(false);
        $mailer->Subject = ($name . " is asking for a estimate");
        $mailer->Body = ("$desc . \n\n . Desired Start Date:  . $date . \n\n . Customer Number: . $phone . \n . Customer Email - Click Here to reply: . $email");

        $mailer->send();
        $mailer->ClearAllRecipients();
        echo "<script>alert('Your message was recieved, we will get back to you shortly');</script>";
    }catch (Exception $e) {
        echo "<script>alert('Your message was not recieved please try calling or emailing us');</script>";
    }
}

?>