<!doctype html>
<!-- nimi -->
<!--
               kt
              toomas
              28/05/24
-->

<html lang="en">

<head>
    <title>admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
    </header>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <a class="navbar-brand nav-link mr-auto text-dark" href="avaleht.php">
                    <strong>Silmberg</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                        <li class="nav-item active ">
                            <a class="nav-link text-dark" aria-current="page" href="avaleht.php">Avaleht</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="kontakt.php">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="minust.php">Minust</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pealkiri = $_POST['pealkiri'];
            $tekst = $_POST['tekst'];
            $action = $_POST['action'];

            if ($action === 'add') {
            $text = $pealkiri . ';' . $tekst;
            file_put_contents('tekst.txt', $text . PHP_EOL, FILE_APPEND);
            } elseif ($action === 'remove') {
            $lines = file('tekst.txt');
            $lines = array_filter($lines, function ($line) use ($pealkiri, $tekst) {
                $lineParts = explode(';', trim($line));
                return $lineParts[0] !== $pealkiri || $lineParts[1] !== $tekst;
            });
            file_put_contents('tekst.txt', implode('', $lines));
            }
        }
        ?>
        <?php
        $lines = file('tekst.txt');
        foreach ($lines as $line) {
            $lineParts = explode(';', trim($line));
            $pealkiri = $lineParts[0];
            $tekst = $lineParts[1];
            echo "<div class='card mb-3'>
                    <div class='card-body'>
                        <h5 class='card-title'>$pealkiri</h5>
                        <p class='card-text'>$tekst</p>
                    </div>
                </div>";
        }
        ?>
        <form method="POST">
            <div class="mb-3">
                <label for="pealkiri" class="form-label">Pealkiri</label>
                <input type="text" class="form-control" id="pealkiri" name="pealkiri" required>
            </div>
            <div class="mb-3">
                <label for="tekst" class="form-label">Tekst</label>
                <input type="text" class="form-control" id="tekst" name="tekst" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="action" value="add">Lisa</button>
                <button type="submit" class="btn btn-danger" name="action" value="remove">Eemalda</button>
            </div>
        </form>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>