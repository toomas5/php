<!doctype html>

<!--
               yl05
              toomas
              07/02/24
-->

<html lang="en">
    <head>
        <title>5</title>
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
<h1>yl5</h1>
<?php
    $tydrukud = array("Liisa", "Anna", "Laura", "Maria", "Kristiina", "Kadri", "Kärt", "Eve");
    sort($tydrukud);
    echo "<h2>Sorteeritud tüdrukute nimed:</h2>";
    echo "<ul>";
    foreach ($tydrukud as $nimi) {
        echo "<li>$nimi</li>";
    }
    echo "</ul>";
        echo "<h2>Esimesed 3 tüdruku nime:</h2>";
        echo "<ul>";
        for ($i = 0; $i < 3; $i++) {
            echo "<li>{$tydrukud[$i]}</li>";
        }
        echo "</ul>";
        echo "<h2>Viimane tüdruku nimi:</h2>";
        echo "<p>{$tydrukud[count($tydrukud) - 2]}</p>";
        echo "<h2>Suvaline tüdruku nimi:</h2>";
        $suvanimi = rand(0, count($tydrukud) - 1);
        echo "<p>{$tydrukud[$suvanimi]}</p>";
        ?>

<?php
    $auto = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");

    $vinkood = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
    "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
    "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
    "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
    "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
    "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
    "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
    "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
    "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
    "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
    "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
    "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
    "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
    "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
    "1N6AA0EDXFN868772", "WBADW3C59DJ422810"
    );
    echo "<h3>Autode arv</h3>";
    $autodearv = count($auto);
    echo "<p>Autode arv: $autodearv</p>";

    echo "<h3>Kas massivid on ühe pikkused?</h3>";
    if (count($auto) == count($vinkood)) {
        echo "<p>Massiivid on ühepikkused</p>";
    } else {
        echo "<p>Massiivid ei ole ühepikkused</p>";
    }
    $toyotad = 0;
    $audid = 0;

    foreach ($auto as $mark) {
        if ($mark == "Toyota") {
            $toyotad++;
        } elseif ($mark == "Audi") {
            $audid++;
        }
    }
    echo "<h3>Toyotade arv</h3>";
    echo "<p>Toyota marki autosid: $toyotad</p>";
    echo "<h3>Audide arv</h3>";
    echo "<p>Audi marki autosid: $audid</p>";
    echo "<h3>Vin koodid mille arv on väiksem kui 17</h3>";
    echo "<p>VIN koodid, mille märkide arv on väiksem kui 17:</p>";
    foreach ($vinkood as $vin) {
        if (strlen($vin) < 17) {
            echo "<p>$vin</p>";
        }
    }
    ?>
    <?php
    $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

    $palksum = array_sum($palgad);

    $palkkesk = $palksum / count($palgad);

    echo "<h3>Keskmine palk</h3>";
    echo "2018 palkade keskmine oli: $palkkesk";
    ?>
    
    <form action="" method="GET">
    <h3>Eemalda firma nimi</h3>
    <label for="nim1">Sisesta firma nimi, mida soovid eemaldada:</label><br>
    <input type="text" id="nim1" name="nim1"><br>
    <input type="submit" value="Eemalda">
    </form>
    <?php
    $firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
    
    sort($firmad);
    
    echo "<h2>Firmade nimed:</h2>";
    echo "<ul>";
    foreach ($firmad as $nimi) {
        echo "<li>$nimi</li>";
    }
    echo "</ul>";
    
    if(isset($_GET["nim1"])) {
        $nim1 = $_GET["nim1"];
        if(in_array($nim1, $firmad)) {
            $x = array_search($nim1, $firmad);
            unset($firmad[$x]);
            sort($firmad);
            echo "<h2>Firmade nimed pärast eemaldamist:</h2>";
            echo "<ul>";
            foreach ($firmad as $nimi) {
                echo "<li>$nimi</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Sellist firmat ei leitud!</p>";
        }
    }
    ?>
    <?php
    $riigid = array("Indonesia", "Canada", "Kyrgyzstan", "Germany", "Philippines",
        "Philippines", "Canada", "Philippines", "South Sudan", "Brazil",
        "Democratic Republic of the Congo", "Indonesia", "Syria", "Sweden",
        "Philippines", "Russia", "China", "Japan", "Brazil", "Sweden", "Mexico", "France",
        "Kazakhstan", "Cuba", "Portugal", "Czech Republic");
    
    $pik = array_map("strlen", $riigid);
    $inde = array_search(max($pik), $pik);
    
    echo "<h3>Kõige pikem riik</h3>";
    echo $riigid[$inde];
    echo "<br>";
    echo max($pik);
    ?>
    <?php
    $nimed = array(
        "瀚聪", "月松", "雨萌", "展博", "雪丽", "哲恒", "慧妍", "博裕", "宸瑜", "奕漳",
        "思宏", "伟菘", "彦歆", "睿杰", "尹智", "琪煜", "惠茜", "晓晴", "志宸", "博豪",
        "璟雯", "崇杉", "俊誉", "军卿", "辰华", "娅楠", "志宸", "欣妍", "明美"
    );
    
    sort($nimed);
    echo "<h1>Chinese</h1>";
    echo "<h3>Esimene chinese text</h3>";
    echo "Esimene nimi: " . $nimed[0] . "<br>";
    echo "<h3>viimane chinese text</h3>";
    echo "Viimane nimi: " . end($nimed) . "<br>";
    
    echo "<h3>Nimed kasvavas järjekorras:</h2>";
    echo "<ul>";
    foreach ($nimed as $nim2) {
        echo "<li>$nim2</li>";
    }
    echo "</ul>";
    ?>
    <form action="" method="GET">
    <h3>Otsingumootor</h3>
    <label for="ots">Otsi nime</label><br>
    <input type="text" id="ots" name="ots"><br>
    <input type="submit" value="otsi">
    </form>
    <?php
        $nimed1 = array(
        "Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
        "Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
        "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
        "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
        "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");

        if (!empty($_GET["ots"])) {
        $otsnim = $_GET["ots"];
        if (in_array($otsnim, $nimed1)) {
        $teade = "Nimi ".$otsnim." on massiivis olemas.";
        $alert_class = "success"; 
        } else {
        $teade = "Nime " .$otsnim ." ei leitud massiivist.";
        $alert = "danger";
        }
        echo "<div class='alert alert-$alert mt-3' role='alert'>$teade</div>";
        } else {
        echo "<div class='alert alert-danger mt-3' role='alert'>Sisesta nimi!</div>";
        }
    ?>
    <?php
    $pildid = array(
        "prentice.png", "freeland.png", "peterus.png", "devlin.png", "gabriel.png", "pete.png"
    );
    
    if (!file_exists("img")) {
        mkdir("img", 0777, true);
    }

    foreach ($pildid as $pilt) {
        copy($pilt, "img/$pilt");
    }
    
    echo "<h2>Kolmas pilt:</h2>";
    echo "<img src='img/{$pildid[2]}' class='img-fluid' alt='Third Image'><br><br>";
    
    echo "<h2>Kõik pildid:</h2>";
    echo "<div class='container'><div class='row'>";
    foreach ($pildid as $pilt) {
        echo "<div class='col-md-2'><img src='img/$pilt' class='img-fluid' alt='$pilt'></div>";
    }
    echo "</div></div>";
    ?>

?>
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
