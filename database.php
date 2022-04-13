<?php
  $host = 'localhost';
  $user = 'igorhezv_st_des';
  $pass = 'xLLR9N0a';
  $db_name = 'igorhezv_st_des';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // під'єднюємося до бд

  // перевіряємо на помилки
  if (!$link) {
    echo "Не можу з'єднатися з БД. Код помилки: " . mysqli_connect_errno() . ", помилка: " . mysqli_connect_error();
    exit;
  }
  
?>
