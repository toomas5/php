<!doctype html>
<!-- nimi -->
<!--
               yl09
              toomas
              20/04/24
-->

<html lang="en">

<head>
    <title>9</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

    <form action="" method="get">
        <label for="nimi">Nimi:</label>
        <input type="text" id="nimi" name="nimi">
        <button type="submit">Tervita</button>
    </form>
    <?php
    if (isset($_GET["nimi"]) && !empty($_GET["nimi"])) {
        $nimi = $_GET["nimi"];
        $nimi1 = ucfirst(strtolower($nimi));
        echo "<p>Tere, " . $nimi1 . "!</p>";
    }echo'<br>';
    ?>

    <form action="" method="get">
        <label for="sonad">Sõnad:</label>
        <input type="text" id="sonad" name="sonad">
        <button type="submit">Lisa punktid</button>
    </form>

    <?php
    if (isset($_GET["sonad"]) && !empty($_GET["sonad"])) {
        $sonad = $_GET["sonad"];
        $tukeldatud_tekst = implode(".", str_split(strtoupper($sonad)));
        echo "<p>" . $tukeldatud_tekst . "</p>";
    }echo'<br>';
    ?>

    <form method="get" action="">
        <p>Ropp sõna tärnideks. Ropud sõnad on 'noob', 'loll' ja 'idioot'.</p>
        <label for="lause">Sisesta lause:</label><br>
        <textarea id="lause" name="lause" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Korrasta">
    </form>

    <?php
    if (isset($_GET["lause"]) && !empty($_GET["lause"])) {
        function ropud_sõnad($lause) {
            $ropp = array("noob", "loll", "idioot");
            foreach ($ropp as $sona) {
                $lause = preg_replace("/\b" . preg_quote($sona, "/") . "\b/i", str_repeat("*", strlen($sona)), $lause);
            }
            return $lause;
        }

        $lause1 = $_GET["lause"];
        $korras_lause = ropud_sõnad($lause1);
        echo "<p>Korras lause: $korras_lause</p>";
    }echo'<br>';

    ?>
    <form method="get" action="">
        <p>Gmaili tegemine</p>
        <label for="enimi">Eesnimi:</label><br>
        <input type="text" id="enimi" name="enimi"><br>
        <label for="pnimi">Perenimi:</label><br>
        <input type="text" id="pnimi" name="pnimi"><br><br>
        <input type="submit" value="Loo email">
    </form>

    <?php
    if (isset($_GET["enimi"]) && isset($_GET["pnimi"]) && !empty($_GET["enimi"]) && !empty($_GET["pnimi"])) {
        function gmail($enimi, $pnimi) {
            $enimi = str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], mb_strtolower($enimi));
            $pnimi = str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "y", "o"], mb_strtolower($pnimi));
            $email = $enimi . "." . $pnimi . "@hkhk.edu.ee";
            return $email;
        }

        $enimi = $_GET["enimi"];
        $pnimi = $_GET["pnimi"];
        $email = gmail($enimi, $pnimi);
        echo "<p>Teie loodud emaili aadress: $email</p>";
    }
    ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
