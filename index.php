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
    <link rel="shortcut icon" href="#">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ASTARTA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Aladin&family=Roboto:wght@100&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Aladin&family=Michroma&family=Roboto:wght@100&family=Work+Sans:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div id="head">
            <div id="header">
                <ul>
                    <li>
                        <a href="#about-us" style="margin-left: 375px;">Про нас</a>
                        <a href="services.html">Послуги</a>
                        <a href="contact.html">Контакти</a>
                        <a href="portfolio.php">Портфоліо</a>
                        <p>+38 (098) 654 77 40</p>
                    </li>
                </ul>
            </div>
            <hr>
            <p align="center" id="head-title-1"><strong>ASTARTA</strong></p>
            <p align="center" id="head-title-2">YOUR INTERIOR DESIGN</p>
            <img src="Vector.png">
        </div>
    </header>
    <information>
        <div id="about-us">
            <p align="center" id="about-us-title">Про нас</p>
            <p class="about-us-font">ASTARTA – амбітна студія дизайну інтер’єрів у Києві з успішним міжнародним досвідом реалізації проектів, що втілює сміливі дизайнерські ідеї для вашого бізнесу.<br><br>
                Ми виконуємо всі види робіт з дизайну інтер’єру, архітектурного та інженерного проектування. Наші спеціалісти створять авторський дизайн-проект для будь-якої комерційної нерухомості – вашого офісу, магазину, клініки, коворкінгу, ресторану чи кафе. Ми також допоможемо виконати і ремонтні роботи.<br><br>
                Дизайн інтер’єру вашої мрії починається з концепції, яка відображається в кресленнях та 3D візуалізаціях. Будь-яке приміщення можливо зробити цікавішим, привабливішим та функціональнішим.</p>
            <p class="about-us-font">Якщо замовити дизайн інтер’єру в студії ASTARTA, ви можете бути впевнені, що гроші не будуть витрачені марно, результат не розчарує і перевершить усі ваші очікування.<br><br>
                Наша мета – створення надійних відносин з клієнтами. З першого дня діяльності нашої дизайн студії ми орієнтуємося на результат, а також першокласне та оперативне виконання проектів будь-якої складності.<br><br>
                Якісний сучасний дизайн збільшує вартість об’єкту, покращує його прибутковість та зменшує строки окупності проекту. Ми допоможемо уникнути багатьох помилок, мінімізувати витрати на оздоблювальні матеріали, підібрати найкращий спосіб реалізації вашого бачення проекту, сформувавши цільну концепцію.</p>
            <div id="grid-container-about-us">
                <div class="grid-item-about-us">
                    <img src="First.png">
                    <p>Подільський Михайло</p>
                    <p>Досвід: 10 років<br>
                    Проєктів реалізовано: 29</p>
                </div>
                <div class="grid-item-about-us">
                    <img src="Second.png">
                    <p>Світлана Адамчук</p>
                    <p>Досвід: 3 років<br>
                    Проєктів реалізовано: 7</p>
                </div>
                <div class="grid-item-about-us">
                    <img src="Third.png">
                    <p>Олександра Байдак</p>
                    <p>Досвід: 5<br>
                    Проєктів реалізовано: 13</p>
                </div>
                <div class="grid-item-about-us">
                    <img src="/Fourth.png">
                    <p>Вікторія Лемак</p>
                    <p>Досвід: 13 років<br>
                    Проєктів реалізовано: 41</p>
                </div>
                <div class="grid-item-about-us">
                    <img src="Fifth.png">
                    <p>Вероніка Пилипчак</p>
                    <p>Досвід: 6 років<br>
                    Проєктів реалізовано: 17</p>
                </div>
            </div>
        </div>

        <div id="our-projects">
            <p>Деякі наші проєкти</p>
            <div id="grid-container-our-projects">
               <?php 
               while($result = mysqli_fetch_assoc($sql))
               {
                   ?>
                    <div class="grid-item-our-projects">
                       <div class="grid-item-our-projects"><a href="details.php?id=<?=$result['id']; ?>&nazva=<?=$result['nazva']; ?>"><span class="our-projects-hover-font">Дізнатись більше про проєкт</span></a><img src="<?php echo $result['img']; ?>.jpg"></div>
                    </div>
                    <?php
                    if($result['id']==6){break;}
               }
           
                ?>
            </div>
            <a href="portfolio.php" id="our-projects-a">Показати всі</a>
        </div>
        
        <div id="stages">
            <p>ЕТАПИ РОЗРОБКИ ПРОЄКТУ</p>
            <div id="grid-container-stages">
                <div class="grid-item-stages">
                    <img src="application.png">
                    <p>ОФОРМЛЕННЯ ЗАЯВКИ</p>
                </div>
                <div class="grid-item-stages">
                    <img src="measurement.png">
                    <p>ОБМІР ПРИМІЩЕННЯ</p>
                </div>
                <div class="grid-item-stages">
                    <img src="planning.png">
                    <p>ПЛАНУВАННЯ</p>
                </div>
                <div class="grid-item-stages">
                    <img src="concept.png">
                    <p>СТВОРЕННЯ КОНЦЕНЦІЇ</p>
                </div>
                <div class="grid-item-stages">
                    <img src="design.png">
                    <p>РОЗРОБКА ДИЗАЙН-ПРОЄКТУ</p>
                </div>
                <div class="grid-item-stages">
                    <img src="supervision.png">
                    <p>АВТОРСЬКИЙ НАГЛЯД</p>
                </div>
            </div>
        </div>
        <div id="call-form">
            <p>Залиште свій номер і ми вам зателефонуємо!</p>

              <form action="send_mail_index.php" name="form" method="POST">
            <div id="call-form-inner">
                <input type="text" class="call-form-input" 
                placeholder="Ваше ім'я*"
                name="name"
                id="name call-form-input-margin"
                data-reg="^[А-ЯЁ][а-яё]*$">

                <input type="text" class="call-form-input"
                placeholder="Ваш телефон*"
                name="phone"
                id="phone"
                data-reg="^((\+3|3|8)+([0-9]){10})$">

                <div class="button">
                  <input type="submit" id="button" class="call-form-button" value="Відправити" />
                </div>

            </div>
              </form>
        </div>
    </information>
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
    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
    <script src="app_index.js"></script>
</body>
</html>
