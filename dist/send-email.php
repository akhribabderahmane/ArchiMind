<?php 
    if(isset($_POST['name']) && isset($_POST['Prenom']) && isset($_POST['email']) && isset($_POST['object']) && isset($_POST['message'])){
        require 'mail.php';
        $mail->setFrom($_POST["email"],$_POST["name"]);
        $mail->addAddress("la_akhrib@esi.dz");
        $mail->Subject =$_POST["object"];
        $mail->Body=" Firstname :".$_POST["name"]."<br>";
        $mail->Body.=" Lastname :".$_POST["Prenom"]."<br>";
        $mail->Body.=" Email    :".$_POST["email"]."<br>";
        $mail->Body.=" Subject  :".$_POST["object"]."<br>";
        $mail->Body.=$_POST['message'];
        $mail->send();
        echo "<a href='http://localhost:80/project_website/contactez-nous.php'>Email has been sent</a>";
    } 
    else{
        echo "Error";
    }
?>