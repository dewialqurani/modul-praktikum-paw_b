<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal Nomor 1</title>
</head>
<body>
    <h2>Modul 2 - PAW 4B <br><?php echo "PHP Fungsi";?><h3>
    <h3>Nama : <?php echo "Dewi Imani Al Qur' Ani";?><br>Nim : 200411100014<h3>
    <?php
    function jumlah($x = 2,$y = 3){
        $hasil = $x ** $y;
        echo "jumlah x + y = $hasil <br>";
    }
    function kali($x = 18,$y = 81){
        $hasil = $x * $y;
        echo "jumlah x * y = $hasil <br>";
    }
    function bagi($x = 3,$y = 2){
        $hasil = $x / $y;
        echo "jumlah x / y = $hasil <br>";
    }
    jumlah(2,3);
    jumlah(18,81);
    jumlah();
    kali(2,3);
    kali(18,81);
    kali();
    ?>
</body>
</html>