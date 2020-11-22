<?php
  session_start();
  $_SESSION['nom'] = $_REQUEST['nom'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>L'affichage des informations</title>
</head>
<body>
    <?php
      echo $_SESSION['nom']."<br>";
      echo $_REQUEST['email']."<br>";
    ?>
</body>
</html>