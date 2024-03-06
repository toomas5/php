<!doctype html>
<!-- nimi -->
<!--
               yl01
              toomas
              15/02/24
-->

<html lang="en">

<head>
    <title>6</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
        for($nr=1;$nr<=100;$nr++){
            if($nr>100){
            continue;
            }
            if($nr % 10 == 0){
                echo $nr++.'. <br>';
            }
            if($nr != 101)
                echo $nr.'. ';
            }

        echo'<br>';

        for($rida=1; $rida<=5; $rida++){ 
            echo '*<br>';
        }

        echo'<br>';

        for($rida=1; $rida<=5; $rida++){ 
            for($veerg=1; $veerg<=5; $veerg++){ 
                echo '* '; 
            }
                echo '<br>';
        }

        echo'<br>';

        for($nr=10;$nr>=1;$nr--){
            if($nr>10){
            continue;
            } 
            echo $nr.'<br>';
            }

        echo'<br>';

        for($nr=1;$nr<=100;$nr++){
            if($nr % 3 == 0){
                echo $nr.' ';
            continue;
                }
            }
        
        

    ?>



    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>