<!-- nimi -->
<!--
               yl14
              toomas
              19/05/24
-->


<?php
$pildid = "C:\\xampp\\htdocs\\php\\autod\\";
$pilt = glob($pildid . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
if ($pilt) {
    $suvaline = $pilt[array_rand($pilt)];
    echo '<img src="' . $suvaline . '" alt="Suvaline pilt">';
} else {
    echo "Pilte ei leitud.";
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>14</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .thumbnail {
            width: 200px;
            height: auto;
            margin: 10px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
$pilt = glob($pildid . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
$igakolmas = count($pilt);
if ($pilt) {
    echo "<br>";
    $counter = 0;
    foreach ($pilt as $image) {
        echo '<img src="' . $image . '" class="thumbnail" onclick="showFullImage(this)" alt="Pisipilt">';
        $counter++;
        if ($counter % 3 == 0 && $counter != $igakolmas) {
            echo "<br>";
        }
    }
} else {
    echo "Pilte ei leitud.";
}
?>

<div id="myModal" class="modal">
    <span class="close" onclick="hideFullImage()">&times;</span>
    <img src="" id="fullImage" class="modal-content">
</div>
<script>
    function showFullImage(img) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("fullImage");
        modal.style.display = "block";
        modalImg.src = img.src;
    }
    function hideFullImage() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>
 
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
