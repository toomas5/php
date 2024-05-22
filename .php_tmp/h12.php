<!doctype html>
<!-- nimi -->
<!--
               yl12
              toomas
              18/05/24
-->

<html lang="en">

<head>
    <title>12</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div class="container">
Auto sõiduaeg
    <form method="get">
        <label for="start">Stardi aeg (hh:mm):</label>
        <input type="text" id="start" name="start" maxlength="5" required pattern="\d{2}:\d{2}">
        <br>
        <label for="lopp">Lõppu aeg (hh:mm):</label>
        <input type="text" id="lopp" name="lopp" maxlength="5" required pattern="\d{2}:\d{2}">
        <br>
        <button type="submit">Arvuta sõiduaeg</button>
    </form>

    <?php
    if (!empty($_GET["start"]) && $_GET["lopp"]) {
        $start = $_GET["start"];
        $lopp = $_GET["lopp"];
        if (strlen($start) < 5 || strlen($lopp) < 5) {
            echo "<p>Sisestatud ajad peavad olema vähemalt viis sümbolit pikad!</p>";
        } else {
            list($starthour, $startminute) = explode(":", $start);
            list($lopphour, $loppminute) = explode(":", $lopp);
            $startstamp = $starthour * 60 + $startminute;
            $loppstamp = $lopphour * 60 + $loppminute;
            $diffminutes = ($loppstamp - $startstamp + 1440) % 1440;

            $tundi = floor($diffminutes / 60);
            $minutid = $diffminutes % 60;
            echo "<p>Sõiduaeg: $tundi tundi ja $minutid minutit.</p>";
        }
    }
    ?>

<?php
$fail = "tootajad.csv";
$csv = fopen($fail, "r") or die("pole faili");

$m_palk = 0;
$m_arv = 0;
$m_max = 0;
$n_palk = 0;
$n_arv = 0;
$n_max = 0;

while (($rida = fgetcsv($csv, 1000, ";")) !== FALSE) {
    if ($rida[1] == "m") {
        $m_palk += $rida[2];
        $m_arv++;
        $m_max = max($m_max, $rida[2]);
    } else {
        $n_palk += $rida[2];
        $n_arv++;
        $n_max = max($n_max, $rida[2]);
    }
}
fclose($csv);

$m_kesk = $m_arv > 0 ? round($m_palk / $m_arv) : 0;
$n_kesk = $n_arv > 0 ? round($n_palk / $n_arv) : 0;

echo "Meeste keskmine palk: $m_kesk<br>Naiste keskmine palk: $n_kesk<br>";
echo "Meeste suurim palk on: $m_max<br>Naiste suurim palk on: $n_max<br>";
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
