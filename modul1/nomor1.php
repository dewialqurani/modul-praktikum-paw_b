<!DOCTYPE html>
<html lang="xml:EN">

<head>
    <title>20-083 Latihan PHP Lanjut (1)</title>
</head>

<body>
    <h1>Pemilihan Tampilan Text</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <table>
            <tr>
                <td><label for="teks">Teks</label></td>
                <td>:</td>
                <td><input type="text" name="teks" id="teks" placeholder="Tulis disini.."></td>
            </tr>
            <tr>
                <td><label for="jumlahTeks">Ditampilkan</label></td>
                <td>:</td>
                <td>
                    <select name="jumlahTeks" id="jumlahTeks">
                            <option value="satu">1</option>
                            <option value="dua">2</option>
                            <option value="tiga">3</option>
                            <option value="empat">4</option>
                            <option value="lima">5</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Lakukan</td>
                <td>:</td>
                <td>
                    <input type="radio" name="aksi" id="aksi">
                    <label for="aksi">Break</label>
                </td>
                <td>
                    <input type="radio" name="aksi" id="aksi">
                    <label for="aksi">Continue</label>
                </td>
            </tr>
            <tr>
                <td>Pada Hitungan ke- </td>
                <td>:</td>
                <td>
                    <select name="batasHitungan" id="batasHitungan">
                            <option value="one">1</option>
                            <option value="two">2</option>
                            <option value="three">3</option>
                            <option value="four">4</option>
                            <option value="five">5</option>
                        </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Proses">
    </form>
    <br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Teks        = $_POST['teks'];
            $JumlahTeks  = $_POST['jumlahTeks'];
            $Aksi        = $_POST['aksi'];
            $BatasHitung = $_POST['batasHitungan'];
            if (empty($Teks)) {
                echo "Belum ada input teks !";
            }
            else {
                if ($JumlahTeks) {
                    for ($i=0; $i<=$JumlahTeks; $i++) {
                        echo "Hitungan ke-"+ $i +" : " + $Teks +"<br>";
                    }
                }
            }
        }
        ?>
</body>

</html>