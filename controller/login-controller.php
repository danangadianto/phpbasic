<?php
    $name = $_POST["name"];
    $pass = $_POST["password"];

    // Below is how to log in PHP
    // echo ("<script>console.log('PHP: " . $pass. "');</script>");

    if ($_POST["name"] == "Danang" && $_POST["password"] == "Danang16") {
        header("Location: ../home.php");
        exit;
    } else {
      echo "<script type='text/javascript'>alert('Salah Kredensial Cuk');</script>";
    }
?>
