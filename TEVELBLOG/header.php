<?php
ini_set("error_reporting", 1);
header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
header("Cache-Control: pre-check=0, post-check=0", false);
header("Pragma: no-cache");

if ($_GET["rel"] != "page") {
?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tevel Dev</title>
      <link rel="stylesheet" href="./src/css/style.css">
   </head>

   <body>
      <nav>
         <ul>

            <li class="list"><a href="about.php" rel="page">
                  <span class=" icon"> <ion-icon name="person-outline"></ion-icon></span>
                  <span class="text"> <strong>About_me</strong></span></a>
            </li>
            <li class="list active"><a href="#" rel="page">
                  <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                  <span class="text"> <strong>Home</strong></span>
                  <div class="indicator"></div>
               </a>
            </li>
            <li class="list"><a href="contact.php" class="icon" onclick="activelink(event)">
                  <span class="icon"><ion-icon name="settings-outline"></ion-icon> </span>
                  <span class="text"> <strong>Contact</strong></span></a>
            </li>
         </ul>
      </nav>
      <div class="content" id="load">
      <?php } ?>