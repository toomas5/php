<!doctype html>
<html lang="en">
    <head>
        <title>4</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
<div class="container">
<h1>yl4</h1>
        <div class="row">
           
            <div class="col-md-6">
                <h4>Jagamine</h4>
                <form method="get" action="">
                    <div class="form-group">
                        <label for="nr1">arv1</label>
                        <input type="nr" class="form-control" id="nr" name="nr" required>
                    </div>
                    <div class="form-group">
                        <label for="nr2">arv2</label>
                        <input type="nr" class="form-control" id="nr" name="nr" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Jaga</button>
                </form>
                <?php

                if (!empty($_GET['nr1']) && !empty($_GET['nr2'])) {
                    $nr1 = $_GET['nr1'];
                    $nr2 = $_GET['nr2'];
                
                    echo '<div class="result-box ';
                    if ($nr2 != 0) {
                        $result = $nr1 / $nr2;
                        echo 'true-result">';
                        echo "<p>vastus: $result</p>";
                    } else {
                        echo 'false-result">';
                        echo "<p>nulliga ei saa jagada</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>
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
                    <button type="submit" class="btn btn-primary">Võrdle vanuseid</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["age1"]) && isset($_POST["age2"])) {
                    $age1 = $_POST["age1"];
                    $age2 = $_POST["age2"];
                
                    echo '<div class="result-box ';
                    if (!empty($age1) && !empty($age2)) {
                        if ($age1 > $age2) {
                            echo 'true-result">';
                            echo "<p>Esimene isik on vanem</p>";
                        } elseif ($age2 > $age1) {
                            echo 'true-result">';
                            echo "<p>Teine isik on vanem</p>";
                        } else {
                            echo 'true-result">';
                            echo "<p>Mõlemad isikud on ühevanused</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Mõni sisestatud vanus on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

            
            <div class="col-md-6 mt-5">
                <h4>Ristkülik või ruut</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="length">Pikkus:</label>
                        <input type="number" class="form-control" id="length" name="length" required>
                    </div>
                    <div class="form-group">
                        <label for="width">Laius:</label>
                        <input type="number" class="form-control" id="width" name="width" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["length"]) && isset($_POST["width"])) {
                    $length = $_POST["length"];
                    $width = $_POST["width"];
                
                    echo '<div class="result-box ';
                    if (!empty($length) && !empty($width)) {
                        if ($length == $width) {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ruut</p>";
                        } else {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ristkülik</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Pikkus või laius on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

           
            <div class="col-md-6 mt-5">
                <h4>Juubel</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="birth_year">Sünniaasta:</label>
                        <input type="number" class="form-control" id="birth_year" name="birth_year" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["birth_year"])) {
                    $birth_year = $_POST["birth_year"];
                
                    echo '<div class="result-box ';
                    if (!empty($birth_year)) {
                        $current_year = date("Y");
                        $age = $current_year - $birth_year;
                    
                        if ($age % 5 == 0) {
                            echo 'true-result">';
                            echo "<p>Tegemist on juubeliaastaga</p>";
                        } else {
                            echo 'false-result">';
                            echo "<p>Tegemist ei ole juubeliaastaga</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Sünniaasta on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

            
            <div class="col-md-6 mt-5">
                <h4>Hinne</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="points">KT punktid:</label>
                        <input type="number" class="form-control" id="points" name="points" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["points"])) {
                    $points = $_POST["points"];
                
                    echo '<div class="result-box ';
                    if (!empty($points)) {
                        switch ($points) {
                            case $points > 10:
                                echo 'true-result">';
                                echo "<p>SUPER!</p>";
                                break;
                            case $points >= 5 && $points <= 9:
                                echo 'true-result">';
                                echo "<p>TEHTUD!</p>";
                                break;
                            case $points < 5:
                                echo 'false-result">';
                                echo "<p>KASIN!</p>";
                                break;
                            default:
                                echo 'false-result">';
                                echo "<p>SISESTA OMA PUNKTID!</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>KT punktid on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>

            <div class="col-md-6 mt-5">
                <h4>Ristkülik või ruut II</h4>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="side1">Pikkus:</label>
                        <input type="number" class="form-control" id="side1" name="side1" required>
                    </div>
                    <div class="form-group">
                        <label for="side2">Laius:</label>
                        <input type="number" class="form-control" id="side2" name="side2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kontrolli</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["side1"]) && isset($_POST["side2"])) {
                    $side1 = $_POST["side1"];
                    $side2 = $_POST["side2"];
                
                    echo '<div class="result-box ';
                    if (!empty($side1) && !empty($side2)) {
                        if ($side1 == $side2) {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ruut</p>";
                        } else {
                            echo 'true-result">';
                            echo "<p>Võimalik, see on ristkülik</p>";
                        }
                    } else {
                        echo 'false-result">';
                        echo "<p>Pikkus või laius on puudu</p>";
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>



</div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
