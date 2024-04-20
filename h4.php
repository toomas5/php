<!doctype html>
<!-- nimi -->
<!--
               yl04
              toomas
              05/02/24
-->

<html lang="en">

<head>
    <title>4</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- yl4 -->
        <h1>yl4</h1>
        <div class="row">
            <!-- jagamine -->
            <div class="col-md-6">
                <h4>Jagamine</h4>
                <form method="get" action="">
                    <div class="form-group">
                        <label for="nr1">arv1</label>
                        <input type="number" class="form-control" id="nr1" name="nr1" required>
                    </div>
                    <div class="form-group">
                        <label for="nr2">arv2</label>
                        <input type="number" class="form-control" id="nr2" name="nr2" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Jaga</button>
                </form>
                <?php
                if (!empty($_GET['nr1']) && !empty($_GET['nr2'])) {
                    $nr1 = $_GET['nr1'];
                    $nr2 = $_GET['nr2'];
                    if ($nr2 != 0) {
                        $result = $nr1 / $nr2;
                        echo "vastus: $result";
                    } else {
                        echo "nulliga ei saa jagada";
                    }
                }
                ?>
            </div>
            <!-- vanus kys -->
            <div class="col-md-6">
                <h4>Vanus</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="age1">Esimene vanus:</label>
                        <input type="number" class="form-control" id="age1" name="age1" required>
                    </div>
                    <div class="form-group">
                        <label for="age2">Teine vanus:</label>
                        <input type="number" class="form-control" id="age2" name="age2" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Võrdle</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age1"]) && isset($_POST["age2"])) {
                    $age1 = $_POST["age1"];
                    $age2 = $_POST["age2"];
                    if (!empty($age1) && !empty($age2)) {
                        if ($age1 > $age2) {
                            echo "Esimene on vanem";
                        } elseif ($age2 > $age1) {
                            echo "Teine on vanem";
                        } else {
                            echo "Mõlemad on ühevanused";
                        }
                    } else {
                        echo "Vanus on puudu";
                    }
                }
                ?>
            </div>
            <!-- kas on ruut v kylik -->
            <div class="col-md-6 mt-5">
                <h4>Ristkülik või ruut</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="pikk">Pikkus:</label>
                        <input type="number" class="form-control" id="pikk" name="pikk" required>
                    </div>
                    <div class="form-group">
                        <label for="lai">Laius:</label>
                        <input type="number" class="form-control" id="lai" name="lai" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pikk"]) && isset($_POST["width"])) {
                    $pikk = $_POST["pikk"];
                    $width = $_POST["width"];
                    if (!empty($pikk) && !empty($width)) {
                        if ($pikk == $width) {
                            echo "See on ruut";
                        } else {
                            echo "See on ristkülik";
                        }
                    } else {
                        echo "Pikkus või laius on puudu";
                    }
                }
                ?>
            </div>
             <!-- kylik ja ruut kaks -->
            <div class="col-md-6 mt-5">
                <h4>Ristkülik või ruut II</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="a">Pikkus:</label>
                        <input type="number" class="form-control" id="a" name="a" required>
                    </div>
                    <div class="form-group">
                        <label for="b">Laius:</label>
                        <input type="number" class="form-control" id="b" name="b" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["a"]) && isset($_POST["b"])) {
                    $a = $_POST["a"];
                    $b = $_POST["b"];
                    if (!empty($a) && !empty($b)) {
                        if ($a == $b) {
                            echo "▢";
                        } else {
                            echo "▭";
                        }
                    } else {
                        echo "Pikkus või laius on puudu";
                    }
                }
                ?>
            </div>
            <!-- juubel v mitte -->
            <div class="col-md-6 mt-5">
                <h4>Juubel</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="synni">Sünniaasta:</label>
                        <input type="number" class="form-control" id="synni" name="synni" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["synni"])) {
                    $synni = $_POST["synni"];
                    if (!empty($synni)) {
                        $aasta = date("Y");
                        $age = $aasta - $synni;
                        if ($age % 5 == 0) {
                            echo "Tegemist on juubeliaastaga";
                        } else {
                            echo "Tegemist ei ole juubeliaastaga";
                        }
                    } else {
                        echo "Sünniaasta on puudu";
                    }
                }
                ?>
            </div>
            <!-- hinne -->
            <div class="col-md-6 mt-5">
                <h4>Hinne</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="punktid">KT punktid:</label>
                        <input type="number" class="form-control" id="punktid" name="punktid" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["punktid"])) {
                    $punktid = $_POST["punktid"];
                    if (!empty($punktid)) {
                        switch ($punktid) {
                            case $punktid >= 10:
                                echo "SUPER!";
                                break;
                            case $punktid >= 5 && $punktid <= 9:
                                echo "TEHTUD!";
                                break;
                            case $punktid < 5:
                                echo "KASIN!";
                                break;
                            default:
                                echo "SISESTA OMA PUNKTID!";
                        }
                    } else {
                        echo "KT punktid on puudu";
                    }
                }
                ?>
            </div>

        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>