<!doctype html>
<!-- nimi -->
<!--
               yl13
              toomas
              19/05/24
-->

<html lang="en">

<head>
    <title>13</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .thumbnail {
        max-width: 300px;
        margin: 10px;
        cursor: pointer;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.9);
    }
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    .modal-content img {
        width: 100%;
    }
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        cursor: pointer;
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
<div class="container">
<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $allowed_types = array("image/jpeg", "image/jpg");
    $file_type = $_FILES["image"]["type"];

    if (in_array($file_type, $allowed_types)) {
        $image_data = file_get_contents($_FILES["image"]["tmp_name"]);
        $base64_image = base64_encode($image_data);
        echo '<img src="data:' . $file_type . ';base64,' . $base64_image . '" class="thumbnail" onclick="openModal(this)">';
        echo '<div id="myModal" class="modal">
                  <span class="close" onclick="closeModal()">&times;</span>
                  <img class="modal-content" id="img01">
              </div>';
    } else {
        echo "<p>Palun laadige üles ainult JPG või JPEG formaadis pilte.</p>";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Valige pilt üleslaadimiseks (.JPG või .JPEG): <br>
    <input type="file" name="image" accept="image/jpeg, image/jpg" required>
    <br><br>
    <input type="submit" value="Üles laadida pilt">
</form>

<script>
    function openModal(img) {
        document.getElementById("myModal").style.display = "block";
        document.getElementById("img01").src = img.src;
    }
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
