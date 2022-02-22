<!-- Taro di satu file tersendiri buat data -->
<?php
$presiden = [
    [
    "pic" => "Soekarno.jpeg",
    "name" => "Soekarno",
    "year" => "1945-1967",
    "gdp" => "Rp. 360 Miliar",
    "growth" => "-2,25% s/d 5,74%",
    "inflation" => "600%",
    "debt" => "USD 2,3 Miliar",
    "ratio" => "-"
    ],
    [
    "pic" => "Soeharto.jpeg",
    "name" => "Soeharto",
    "year" => "1967-1998",
    "gdp" => "Rp. 955,63 Triliun",
    "growth" => "-13,13% s/d 10,92%",
    "inflation" => "80%",
    "debt" => "Rp. 551,4 Miliar",
    "ratio" => "57,7%"
    ],
    [
    "pic" => "Habibie.jpeg",
    "name" => "BJ Habibie",
    "year" => "1998-1999",
    "gdp" => "Rp. 1.099 Triliun",
    "growth" => "0,79%",
    "inflation" => "2%",
    "debt" => "Rp. 938,8 Triliun",
    "ratio" => "85,4%"
    ],
    [
    "pic" => "Gusdur.jpeg",
    "name" => "Abdurrahman Wahid",
    "year" => "1999-2001",
    "gdp" => "Rp. 1.491 Triliun",
    "growth" => "3,64% s/d 4,92%",
    "inflation" => "12,6%",
    "debt" => "Rp. 1.271,4 Triliun",
    "ratio" => "77,2%"
    ],
    [
    "pic" => "Megawati.jpeg",
    "name" => "Megawati Soekarno Putri",
    "year" => "2001-2004",
    "gdp" => "Rp. 2.303 Triliun",
    "growth" => "4,5% s/d 5,03%",
    "inflation" => "6,5%",
    "debt" => "Rp. 1.298 Triliun",
    "ratio" => "56,5%"
    ],
    [
    "pic" => "SBY.jpeg",
    "name" => "Susilo Bambang Yudhoyono",
    "year" => "2004-2014",
    "gdp" => "Rp. 10.542 Triliun",
    "growth" => "4,63% s/d 6,49%",
    "inflation" => "17%",
    "debt" => "Rp. 2.609 Triliun",
    "ratio" => "24,7%"
    ],
    [
    "pic" => "Jokowi.jpeg",
    "name" => "Joko Widodo",
    "year" => "2014-2019",
    "gdp" => "Rp. 13.588 Triliun",
    "growth" => "5,1%",
    "inflation" => "3%",
    "debt" => "Rp. 5.485 Triliun",
    "ratio" => "36,8%"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Pisahin style di satu css tersendiri tiap page -->
    <style>
        body {
            background-image: url(img/bendera.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-color: gray;
        }

        h1 {
            text-align: center;
            background-color: white;
        }

        h2, h3 {
            text-align: center;
        }

        .container {
            background-color: lightgray;
            width: 500px;
            margin: 100px auto;
            padding: 10px;
            box-sizing: border-box;
        }

        .wrapper {
            margin: 5px auto;
            padding: 10px;
            width: 250px;
            box-sizing: border-box;
        }

        mark {
            background-color: white;
            font-size: medium;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang <?php if( isset($_POST["name"])) : ?>
        <!-- Buang kode yg gk kepake -->
        <?= $_POST["name"] ?> 
    <?php else : ?>
        <?= "" ?>
    <?php endif; ?>
    </h1>
    <div class="container">
        <h2>Daftar Presiden</h2>
        <h3>Berikut adalah daftar presiden Republik Indoneisa yang pernah menjabat sejak kemerdekaan</h3>

        <ol class="wrapper">
            <?php foreach( $presiden as $pres) : ?>
                <li>
                    <a href="presindo.php?name=<?= $pres["name"]; ?>&year=<?= $pres["year"]; ?>&gdp=<?= $pres["gdp"]; ?>&growth=<?= $pres["growth"]; ?>&inflation=<?= $pres["inflation"]; ?>&debt=<?= $pres["debt"]; ?>&ratio=<?= $pres["ratio"]; ?>&pic=<?= $pres["pic"]; ?>"><?= $pres["name"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ol>

    </div>
    
    <div class="wrapper">
        <mark><a href="login.php">Back to Login Page</a></mark>
    </div>
</body>
</html>
