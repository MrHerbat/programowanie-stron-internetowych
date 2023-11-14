<?php session_start()?>
<?php
    include("polaczenie.php");
    $connect = connect();

    $_SESSION['access'] = 0;

    ?>
<!DOCTYPE html>
<html lang="pl">
<head>
        <?php 
        $sql1 = "select * from `ustawienia` where id=2";
        $komenda1 = mysqli_query($connect, $sql1);
        $wiersz1 = mysqli_fetch_array($komenda1);
        echo "<style>
        body{background-color: ".$wiersz1[1].";}";
        ?>;
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>
        <?php 
        $sql = "select * from `ustawienia` where id=1";
        $komenda = mysqli_query($connect, $sql);
        $wiersz = mysqli_fetch_array($komenda);
        echo $wiersz[1];
        ?>
    </title>
</head>
<body>
    
    <div id="flex">
        <button id="menu">&#9776;</button>
    </div>
    
  <div id="strona">
        magia!
        
    </div>
    <?php
    rozlacz($connect);
    ?>
</body>
</html>