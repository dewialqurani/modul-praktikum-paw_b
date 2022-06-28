<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal Nomor 3</title>
</head>
<body>
    <h2>Modul 1 - PAW 4B <br><?php echo "Variable Local dan Global.";?><h3>
    <h3>Nama : <?php echo "Dewi Imani Al Qur' Ani";?><br>Nim : 200411100014<h3>
    <?php
    //variabel global
    $var1 = 8;
    $var2 = 1;

    function myFunction(){
        //variabel local
        $var1 = 9;
        $var2 = 4; 
        echo "Hasil Variabel Local Lihat Disini ! <br>";
        echo "Variabel 1 bernilai = " .$var1. "<br>";
        echo "Variabel 2 bernilai = " .$var2. "<br><br>";
    }
    myFunction();
    echo "Hasil Variabel Global Lihat Disini !<br>";
    echo "Variabel 1 bernilai = ".$var1."<br>";
    echo "Variabel 2 bernilai = ".$var2."<br>";
    ?>
</body>
</html>