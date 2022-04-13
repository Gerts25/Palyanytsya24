<?php

include "database.php";

$sql = mysqli_query($link, "SELECT * FROM `project_preview`");
    //якщо все добре
   /* if ($sql) {
      echo '<p>Успішно!</p>';
    } else {
      echo '<p>Сталася помилка: ' . mysqli_error($link) . '</p>';
    }*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ASTARTA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='portfolio.css'>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Aladin&family=Roboto:wght@100&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Aladin&family=Michroma&family=Roboto:wght@100&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="header">
             <ul>
                <li>
                    <a href="index.php" id="header-title">ASTARTA</a>
                    <a href="index.php#about-us" style="margin-left: 298px;">Про нас</a>
                    <a href="services.html">Послуги</a>
                    <a href="contact.html">Контакти</a>
                    <a href="portfolio.php">Портфоліо</a>
                    <p style="margin-left: 275px;">+38 (098) 654 77 40</p>
                  </li>
            </ul>
         </div>
    </header>
    <content>
        <div>
            <div id="grid-container-gallery">
                  <?php 
               while($result = mysqli_fetch_assoc($sql))
               {
                   ?>
                    <div class="grid-item-our-projects">
                       <div class="grid-item-our-projects"><a href="details.php?id=<?=$result['id']; ?>&nazva=<?=$result['nazva']; ?>"><span class="our-projects-hover-font">Дізнатись більше про проєкт</span></a><img src="<?php echo $result['img']; ?>.jpg"></div>
                    </div>
                    <?php
                    
               }
           
           ?>
                
            </div>
        </div>
    </content>
    <footer>
        <div id="footer">
            <div class="footer-margin" id="footer-cop">
                <img align="left" src="Copyright.png">
                <p>ASTARTA archirecture workshop</p>
            </div>
            <div class="footer-margin">
                <p class="footer-title">Зателефонуйте нам</p>
                <p>+38 (098) 654 77 40</p>
                <button>Замовити дзвінок</button>
            </div>
            <div class="footer-margin">
                <p class="footer-title">Напишіть нам</p>
                <p>astarta@gmail.com</p>
            </div>
            <div class="footer-margin">
                <p class="footer-title">Завітайте до нас</p>
                <p>Kyiv, Ukraine, 04071<br>vul. Naberezhno-Lugova, 8</p>
            </div>
        </div>
    </footer>
</body>
</html>