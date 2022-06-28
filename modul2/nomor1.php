<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal Nomor 1</title>
</head>
<body>
    <h2>Modul 2 - PAW 4B <br><?php echo "PHP Fungsi";?><h3>
    <h3>Nama : <?php echo "Dewi Imani Al Qur' Ani";?><br>Nim : 200411100014<h3>
    <?php
    function jumlah($x = 8,$y = 9){
        $hasil = $x + $y;
        echo "Jumlah x + y = $hasil <br>";
    };
    function kali($x = 18,$y = 81){
        $hasil = $x * $y;
        echo " Kali x * y = $hasil <br>";
    };
    function bagi($x = 12,$y = 5){
        $hasil = $x / $y;
        echo " Bagi x / y = $hasil <br>";
    }
    echo "<br> Pemanggilan Fungsi Jumlah() <br></br>";
    jumlah(2,3);
    jumlah(18,81);
    jumlah();
    echo "<br> Pemanggilan Fungsi Kali() <br></br>";
    kali(8,9);
    kali(3,7);
    kali();
    echo "<br> Pemanggilan Fungsi Bagi() <br></br>";
    bagi(8,9);
    bagi(18,81);
    bagi();
    ?>
</body>
</html>