<?php 
use PHPMailer\PHPMailer\PHPMailer;
require_once "./vendor/autoload.php";
if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);
    $mail->Subject = "CANDIDATURE THEORY";
    
    $mail->Body .= '<p>Hello World</p>';
    
    $mail->IsHTML(true);
    $mail->Port = 1025;
    $mail->setFrom("anthonyperrinff@gmail.com");
    $mail->addAddress("anthonyperrinff@gmail.com");
    $mail->addAddress("kremer.sebastien@gmail.com");
    $mail->send();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/roster.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" type="text/css" rel="stylesheet" />    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,600,700" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Theory</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-template justify-content-between shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/icon_SVG/logo_theory_sticky.svg" height="30px" width="30px">
                Theory
            </a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roster.php">ROSTER</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CONTACT <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <div style="padding-top: 2px;">
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="float-right">
                    <a href="#" class="btn">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="btn">
                        <i class="fab fa-twitch"></i>  
                    </a>
                    <a href="#" class="btn">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <img src="images/hm_photo_filtre.jpg" class="shadow" width="100%">
    </div>
    <div class="container">
        <form method="post" action="contact.php">
            <div class="form-group">
                <label for="email"></label>
            </div>
            <input name="submit" type="submit" value="Envoyer">
        </form>
    </div>
