<!doctype html>
<html lang="en">
    <head>
        <title>1 2</title>
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
<h1>yl1</h1>
<?php
/*
yl01
toomas
01/02/24
*/

$nimi = 'toomas';
$synd = 17;
$kuju = 'kolmnurk';
echo "nimi ".$nimi." synniaasta ".$synd." t2htkuju ".$kuju."<br>";
echo "\"It's My Life\" - Dr. Alban<br>";

echo "(\(\<br>";
echo "( -.-)<br>";
echo "o_(\")(\")<br>";
?>

<h1>y2</h1>
<?php

$nr1 = 12;
$nr2 = 5;
$liit = $nr1 + $nr2;
$laht = $nr1 - $nr2;
$kord = $nr1 * $nr2;
$jaga = $nr1 / $nr2;
$j22k = $nr1 % $nr2;
echo sprintf('12 + 5 = %0.3f <br>', $liit);
$v2 = sprintf('12 - 5 = %0.3f <br>', $laht);
$v3 = sprintf('12 * 5 = %0.3f <br>', $kord);
$v4 = sprintf('12 / 5 = %0.3f <br>', $jaga);
$v5 = sprintf('12 ¤ 5 = %0.3f <br>', $j22k);
echo $v2,$v3,$v4,$v5;

$mm = 1500;
$cm = $mm / 10;
$m = $cm / 100;
echo "mil ".number_format($mm, 2) . " mm<br>";
echo "sent ".number_format($cm, 2) . " cm<br>";
echo "meeter ".number_format($m, 2) . " m<br>";

$a = 3;
$b = 4;
$c = sqrt($a**2 + $b**2);
$ymber = round($a + $b + $c);
$pind = round(0.5 * $a * $b);

echo "ümbermõõt $ymber pindala  $pind";

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
