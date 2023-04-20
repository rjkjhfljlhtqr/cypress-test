<?php
session_start();

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // сохранение данных в базу данных или отправка электронной почты
  
  // сохранение данных в сессионные переменные
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['message'] = $message;
  
  header('Location: thank-you.php');
  exit();
}
else {
  echo 'Данные не были переданы методом POST.';
}

?>