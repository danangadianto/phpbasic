<?php
// if( !isset($_GET["nama"]) || 
//     !isset($_GET["year"]) || 
//     !isset($_GET["gdp"]) || 
//     !isset($_GET["growth"]) || 
//     !isset($_GET["inflation"]) || 
//     !isset($_GET["debt"]) || 
//     !isset($_GET["ratio"]) || 
//     !isset($_GET["pic"]) ) {
//     header("Location: home.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Presiden RI</title>
    <style>
        body {
            background-image: url(img/bendera.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            display: flex;
            background-color: silver;
            justify-content: center;
            flex-direction: column;
            margin: 25px auto;
            padding: 3px;
            width: 400px;
        }

        h1 {
            text-align: center;
        }

        .foto {
            margin: 2px auto;
        }

        .wrapper {
            width: 300px;
            margin: 2px auto;
            padding: 3px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }

        .wrapper div {
            text-align: center;
            margin: 1px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Presiden Republik Indonesia</h1>

        <div class="foto">
            <div><img src="img/<?= $_GET["pic"] ?>"></div>
        </div>
        <div class="wrapper">
            <div><strong><?= $_GET["name"] ?></strong></div>
            <div><?= $_GET["year"] ?></div>
            <div>PDB: <ins><?= $_GET["gdp"] ?></ins></div>
            <div>Pertumbuhan Ekonomi: <ins><?= $_GET["growth"] ?></ins></div>
            <div>Inflasi: <ins><?= $_GET["inflation"] ?></ins></div>
            <div>Utang Pemerintah: <ins><?= $_GET["debt"] ?></mark></div>
            <div>Rasio Utang: <ins><?= $_GET["ratio"] ?></ins></div>
        </div>
    </div>

    <a href="home.php">Back to Homepage</a>
</body>

</html>
