<!doctype html>
<!-- nimi -->
<!--
               yl08
              toomas
              20/04/24
-->

<html lang="en">

<head>
    <title>8</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
date_default_timezone_set("Europe/Tallinn");
$aeg = date("d.m.Y H:i");
echo $aeg;
?>
<h2>Sisesta oma sünniaasta, -kuu ja -kuupäev:</h2>
<form method="GET">
    <input type="number" name="sunniaasta" placeholder="Aasta" required min="1900" max="<?php echo date("Y"); ?>"><br><br>
    <select name="sunnikuu" required>
        <option value="">Kuu</option>
        <?php
        for ($kuu = 1; $kuu <= 12; $kuu++) {
            echo "<option value=\"$kuu\">$kuu</option>";
        }
        ?>
    </select>
    <input type="number" name="sunnikuupaev" placeholder="Kuupäev" required min="1" max="31">
    <button type="submit">Kontrolli vanust</button>
</form>
<?php
if (!empty($_GET["sunniaasta"]) && !empty($_GET["sunnikuu"]) && !empty($_GET["sunnikuupaev"])) {

    $sunniaasta = $_GET["sunniaasta"];
    $sunnikuu = $_GET["sunnikuu"];
    $sunnikuupaev = $_GET["sunnikuupaev"];
    $aeg = time();
    $synnipaev = strtotime("$sunniaasta-$sunnikuu-$sunnikuupaev");

    if ($synnipaev > $aeg) {
        echo "<h2>Sünnikuupäev ei saa olla tulevikus!</h2>";
        exit();
    }

    $vanusseeaasta = date("Y") - $sunniaasta;

    if (date("md", $synnipaev) < date("md")) {
        $vanustana = $vanusseeaasta;
    } else {
        $vanustana = $vanusseeaasta - 1;
    }

    echo "See aasta saad: " . $vanusseeaasta . " aastaseks." . "</br>";
    echo "Sinu vanus praegu: " . $vanustana . " aastane.";
}

$koolilopp = strtotime("24 June 2024");
$aeg = time();
$paevialles = ceil(($koolilopp - $aeg) / (60 * 60 * 24));

echo "<h2>Mitu Päeva on Kooli aasta lõpuni alles?</h2>";
echo "2022 kooliaasta lõpuni on jäänud $paevialles päeva!";
?>
<h2>Vali aastaaja järgi pilt</h2>
<form action="" method="get">
    <label for="aastaaeg">Vali aastaaja järgi:</label>
    <select name="aastaaeg" id="aastaaeg">
        <option value="kevad">Kevad</option>
        <option value="suvi">Suvi</option>
        <option value="sygis">Sügis</option>
        <option value="talv">Talv</option>
    </select>
    <button type="submit">Submit</button>
</form>
<?php
$aastaaeg = isset($_GET["aastaaeg"]) ? $_GET["aastaaeg"] : "";

switch ($aastaaeg) {
    case "kevad":
        $pildiallikas = "kevad.jpg";
        break;
    case "suvi":
        $pildiallikas = "suvi.jpg";
        break;
    case "sygis":
        $pildiallikas = "sygis.jpg";
        break;
    case "talv":
        $pildiallikas = "talv.jpg";
        break;
    default:
        $pildiallikas = "";
        break;
}

if ($pildiallikas) {
    echo "<img src='$pildiallikas' alt='#'>";
} else {
    echo "Vali aastaaeg";
}
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
