<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASISTENSI 2</title>
</head>
<body>
    <h2>Nama : <?php echo "Dewi Imani A";?><br>
    <h2>NIM : <?php echo "200411100014";?><br>

    <?php
    setlocale(LC_TIME,'id_ID.utf8');
    $tgl_indo = new Datetime();

    echo "Sekarang Hari " .strftime('%A : Tanggal %d %B %Y', $tgl_indo->getTimestamp()).'<br>';
    ?>
</body>
</html>