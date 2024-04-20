<!doctype html>

<!--
               yl03
              toomas
              01/02/24
-->

<html lang="en">
    <head>
        <title>3</title>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        >

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        >
    </head>

    <body>
<div class="container">
<h1>yl3</h1>
<form method="post" action="">
    <label for="a">a: </label>
    <input type="number" step="any" id="a" name="a" required><br>

    <label for="b">b: </label>
    <input type="number" step="any" id="b" name="b" required><br>

    <label for="h">h: </label>
    <input type="number" step="any" id="h" name="h" required><br>
    <input type="submit" value="arvuta">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $h = $_POST["h"];
  
   
    $p = ($a + $b) * $h / 2;
  
  
    $s = 4 * sqrt(pow(($a / 2), 2) + pow($h, 2));
  
    echo "trapets S= " . round($s, 1) . " cm²</br>";
    echo "romb P= " . round($p, 1) . " cm</br>";
  }
?>




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
