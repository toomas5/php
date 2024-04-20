<!doctype html>
<!-- nimi -->
<!--
               yl07
              toomas
              20/04/24
-->

<html lang="en">

<head>
    <title>7</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div class="container">
<?php

function tervita() {
    echo "Tere päiksekesekene!";
}
tervita();

function liitum() {
    $vorm ='
    <form action="#" method="GET">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Sisesta oma e-post" aria-label="Sisesta oma e-post" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Liitu uudiskirjaga</button>
            </div>
        </div>
    </form>';

    echo $vorm;
}
liitum();
?>
<form action="" method="GET">
        <label for="kasutaja">Sisesta oma kasutaja nimi:</label><br>
        <input type="text" id="kasutaja" name="kasutaja"><br><br>
        <input type="submit" value="Saada">
    </form>
<?php
function gmail($kasutaja) {
    $kasutajav = strtolower($kasutaja);
    $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 7);
    $email = $kasutajav . "@"  . "hkhk.edu.ee" . "<br>" . "Loodud Kood: ". $code;
    echo'<br>';
    return $email;
}

if (isset($_GET["kasutaja"])) {
    $kasutaja = $_GET["kasutaja"];
    
    $email = gmail($kasutaja);
    echo "Loodud email: " . $email;
}

?><br>
<form action="" method="get">
        <label for="algus">Esimene arv:</label>
        <input type="number" id="algus" name="algus" required><br><br>
        <label for="lopp">Viimane arv:</label>
        <input type="number" id="lopp" name="lopp" required><br><br>
        <label for="samm">Samm:</label>
        <input type="number" id="samm" name="samm" value="1" required><br><br>
        <input type="submit" value="Genereeri arvud">
    </form>
    <br>
    <?php
function genereeri_arvud($algus, $lopp, $samm = 1) {
    if ($samm <= 0) {
        return "samm peab olema positiivne arv";
    }

    if ($algus > $lopp) {
        return "algusarv ei tohi olla suurem kui lõpparv";
    }

    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}

if (isset($_GET["algus"]) && isset($_GET["lopp"])) {
    $algus = $_GET["algus"];
    $lopp = $_GET["lopp"];
    $samm = isset($_GET["samm"]) ? $_GET["samm"] : 1;

    $tulemus = genereeri_arvud($algus, $lopp, $samm);
    echo "arvud: ";
    echo implode(", ", $tulemus);
} else {
    echo "Palun sisesta nii algus kui ka lõpparv";
}
?>
    <form action="" method="get">
        <label for="pikkus">Pikkus:</label>
        <input type="number" id="pikkus" name="pikkus" required><br><br>
        <label for="laius">Laius:</label>
        <input type="number" id="laius" name="laius" required><br><br>
        <input type="submit" value="Arvuta pindala">
    </form>

    <?php
        if (isset($_GET["pikkus"]) && isset($_GET["laius"])) {
            $pikkus = $_GET["pikkus"];
            $laius = $_GET["laius"];

            $pindala = arvuta_ristkylikupindala($pikkus, $laius);
            echo "<p>Ristküliku pindala on: " . $pindala . "</p>";
        }
    function arvuta_ristkylikupindala($pikkus, $laius) {
        if ($pikkus <= 0 || $laius <= 0) {
            return "pikkus ja laius peavad olema positiivsed arvud";
        }
        $pindala = $pikkus * $laius;
        return $pindala;
    }
    ?>
    <br>
    <form action="" method="get">
        <input type="text" name="isikukood" placeholder="Sisesta isikukood">
        <input type="submit" value="Kontrolli">
    </form>
    
    <?php
    if (!empty($_GET["isikukood"])) {
        $isikukood = $_GET["isikukood"];
        
        function kontrollisik($isikukood) {
            if (strlen($isikukood) !== 11) {
                return "Isikukood peab olema 11 numbrit pikk.";
            }
            $paev = substr($isikukood, 5, 2);
            $kuu = substr($isikukood, 3, 2);
            $aasta = substr($isikukood, 1, 2);
            
            $sajandikontroll = intval(substr($isikukood, 1, 2));
            $sajand = ($sajandikontroll < 22) ? "20" : "19";
            
            $sunnikuupaev = $sajand . $aasta . "-" . $kuu . "-" . $paev;
        
            $sugu = (intval(substr($isikukood, 0, 1)) % 2 == 0) ? "Naine" : "Mees";
        
            return "Sugu: $sugu, Sünnikuupäev: $sunnikuupaev";
        }
        
        $tulemus = kontrollisik($isikukood);
        echo "<p>$tulemus</p>";
        
    }
    ?>
    <?php
function koosta_lause($alus, $oeldis, $sihitis) {
    $valus = $alus[array_rand($alus)];
    $voeldis = $oeldis[array_rand($oeldis)];
    $vsihitis = $sihitis[array_rand($sihitis)];

    $lause = ucfirst($valus) . " " . $voeldis . " " . $vsihitis . ".";
    return $lause;
    
}
$alus = array("kass", "koer", "kits", "karu", "hunt");
$oeldis = array("istub", "tantsib", "mängib", "sööb", "loeb");
$sihitis = array("kodus", "toas", "metsas", "aias", "saalis");
$lause = koosta_lause($alus, $oeldis, $sihitis);
echo "<br>";
echo "<p>$lause</p>";
?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>