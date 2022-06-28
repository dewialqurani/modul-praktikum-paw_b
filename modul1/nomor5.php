<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal Nomor 5</title>
</head>
<body>
    <h2>Modul 1 - PAW 4B <br><?php echo "PHP Kondisional";?><h3>
    <h3>Nama : <?php echo "Dewi Imani Al Qur' Ani";?><br>Nim : 200411100014<h3>
    <?php
    setlocale(LC_TIME,'id_ID.utf8');

   $tgl_indo = new DateTime();
   echo "Sekarang Hari " .strftime('%A : Tanggal %d %B %Y', $tgl_indo->getTimestamp()).'<br>';
    ?>
</body>
</html>