<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Спасибо!</title>
</head>
<body>
  <h1>Спасибо за отправку формы!</h1>
  <p>Имя: <?php echo htmlspecialchars($_SESSION['name']); ?></p>
  <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
  <p>Сообщение: <?php echo htmlspecialchars($_SESSION['message']); ?></p>
</body>
</html>


<?php

session_unset();
session_destroy();

?>