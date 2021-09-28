<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php dasar</title>
    <?php
    // 1. Luas Persegi
    $l = 5;

    $luasP = $l * $l;

    // 2. Luas Segitiga

    define("S", 0.5);
    $a = 10;
    $t = 15;

    $luasS = S * $a * $t;

    // 3. Luas Trapesium 

    $a1 = 14;
    $b = 26;
    $t1 = 8;

    $luasT = S * ($a1 + $b) * $t;

    //  4. Luas Permukaan Tabung 

    define("PHI", 3.14);

    $j = 4;
    $t2 = 9;

    $luasPT = 2 * PHI * $j * ($j + $t2);

    // 5. Luas Permukaan bola

    $r = 20;

    $luasPB = 4 * PHI * $r * $r;

    ?>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="box1" style="background-color: #FE8F8F ;">
                <div class="img">
                    <img height="200px" width="200px" src="img/persegi.png" alt=""><br>
                </div>
                <div>
                    <?php echo "Rumus : Luas = S x S <br>";
                    echo "Luas = " . $l . " x " . $l;
                    ?>
                </div>
                <div>
                    <?php echo "Luas Persegi : " . $luasP . " cm2"; ?>
                </div>
            </div>
            <div class="box1" style="background-color: #FF5C58 ;">
                <div class="img">
                    <img height="200px" width="200px" src="img/segitiga.png" alt=""><br>
                </div>
                <div>
                    <?php echo "Rumus : Luas= 1/2 x A x T <br>";
                    echo "Luas = " . S . " x " . $a . " x " . $t;
                    ?>
                </div>
                <div>
                    <?php echo "Luas Segitiga : " . $luasS . " cm2"; ?>
                </div>
            </div>
            <div class="box1" style="background-color: #FF3D68;">
                <div class="img">
                    <img height="200px" width="200px" src="img/trapesium.png" alt=""><br>
                </div>
                <div>
                    <?php echo "Rumus : Luas= 1/2 x ( A + B ) x T <br>";
                    echo "Luas = " . S . " x (" . $a1 . " + " . $b . ") x " . $t1;
                    ?>
                </div>
                <div>
                    <?php echo "Luas Trapesium : " . $luasT . " cm2"; ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container">
            <div class="box2" style="background-color:#5C7AEA ;">
                <div class="img">
                    <img height="200px" width="200px" src="img/tabung.png" alt=""><br>
                </div>
                <div>
                    <?php echo "Rumus : Luas= 2 x PHI x r x ( r + t ) <br>";
                    echo "Luas = 2 x " . PHI . " x " . $j . " x ( " . $j . " + " . $t2 . " )";
                    ?>
                </div>
                <div>
                    <div>
                        <?php echo "Luas Permukaan Tabung : " . $luasPT . " cm2"; ?>
                    </div>
                </div>
            </div>
            <div class="box2" style="background-color:#3D56B2;">
                <div class="img">
                    <img height="200px" width="200px" src="img/bola.png" alt=""><br>
                </div>
                <div>
                    <?php echo "Rumus : Luas= 4 x PHI x r x r  <br>";
                    echo "Luas = 4 x " . PHI . " x " . $r . " x  " . $r;
                    ?>
                </div>
                <div>
                    <?php echo "Luas Permukaan Bola : " . $luasPB . " cm2"; ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <footer class="wrapper">
        <div class="footer">© 2021 Achmad Zainur Rahman</div>
    </footer>
</body>

</html>