<?php
//membuat koneksi database
$server = "localhost";
$user = "root";
$password = "";
$dbname = "mahasiswa";
$no = 1;

$koneksi = mysqli_connect($server,$user,$password,$dbname)or die(mysqli_error($koneksi));
//keterangan Tombol Simpan
if(isset($_POST['bsimpan'])){
    //uji data diedit atau disimpan
    if($_GET['hal'] == "edit"){ 
        $edit = mysqli_query($koneksi, "UPDATE tbl_mahasiswa set 
                                            nrp = '$_POST[tnrp]',
                                            nama = '$_POST[tnama]',
                                            email = '$_POST[temail]',
                                            alamat = '$_POST[talamat]'
                                        WHERE no_mhs = '$_GET[id]'
                                        ");
        //data diedit jika sukses
        if($edit){
            echo "<script>
                    alert('Edit Data Sukses');
                    document.location='nomor1.php';
                </script>";
        }else{
            echo "<script>
                    alert('Edit Data Gagal');
                    document.location='nomor1.php';
                </script>";
            }
        }
    else{
        //data disimpan
        $simpan = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa (nrp, nama, email, alamat)
                                        VALUES ('$_POST[tnrp]', 
                                            '$_POST[tnama]', 
                                            '$_POST[temail]',
                                            '$_POST[talamat]')
                                        ");
        if($simpan){ //jika simpan data sukses
            echo "<script>
                    alert('Menambahkan Data Sukses');
                    document.location='nomor1.php';
                </script>";
        }else{
            echo "<script>
                    alert('Menambahkan Data Gagal');
                    document.location='nomor1.php';
                </script>";
        }
    }
}

//Eksekusi button edit dan hapus
if(isset($_GET['hal'])){
    //eksekusi data yang akan diedit
    if($_GET['hal'] == "edit"){
        //menampilkan data yang diedit
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE no_mhs = '$_GET[id]' ");
        $data = mysqli_fetch_array($hasil);
        if($data){ //jika data ditemukan maka data ditampung di variabel
            $vnrp = $data['nrp'];
            $vnama = $data['nama'];
            $vemail = $data['email'];
            $alamat = $data['alamat'];
        }
    }
    else if($_GET['hal'] == "hapus")
    {
        $hapus = mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE no_mhs = '$_GET[id]'");
        if($hapus){
            echo "<script>
                    alert('Hapus Data Sukses');
                    document.location='nomor1.php';
                </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Modul 5</title>
    
    <div class="container">
    <!-- Judul-->
    <h2 class="text-center">Modul 5 - PHP & MySQL</h2>
    <h5 class="text-align">Nama : Dewi Imani Al Qur' Ani</h5>
    <h5 class="text-align">NIM  : 200411100014</h5>
    <!-- Awal card form-->
    <div class="card mt-4">
    <div class="card-header bg-primary text-black" >
        Form Tambah dan Edit Biodata Mahasiswa
    </div>
    <div class="card-body">
        <form method="post" action="">
            <table>    
                <tr class="form-group">
                    <td>
                        <label>NRP</label>
                    </td>
                    <td>
                        <input type="text" name="tnrp" value="<?=@$vnrp?>" class="from-control" placeholder="Input nrp anda disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>NAMA</label>
                    </td>
                    <td>
                        <input type="text" name="tnama" value="<?=@$vnama?>" class="from-control" placeholder="Input nama anda disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" name="temail" value="<?=@$vemail?>" class="from-control" placeholder="Input email anda disini !" ruqueired>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Alamat</label>
                    </td>
                    <td>
                        <textarea class="form-control" name="talamat" placeholder="input alamat anda" ><?=@$alamat?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success" name="bsimpan">Save</button>
                        <button type="reset" class="btn btn-danger" name="bbatal">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
<!-- Akhir card form-->

<!-- Awal card tabel-->
<div class="card mt-4">
    <div class="card-header bg-primary text-black" >
        Daftar Nama Mahasiswa
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>NAMA</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Operasi</th>
            </tr>

            <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa order by no_mhs desc");
                while($data = mysqli_fetch_array($hasil)) :
                $no+1;
            
            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['nrp'];?></td>
                <td><?=$data['nama'];?></td>
                <td><?=$data['email'];?></td>
                <td><?=$data['alamat'];?></td>
                <td>
                    <a href="nomor1.php?hal=edit&id=<?=$data['no_mhs']?>" class="btn btn-warning">Edit</a>
                    <a href="nomor1.php?hal=hapus&id=<?=$data['no_mhs']?>"
                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endwhile;?> 
        </table>
    </div>
    </div>
<!-- Akhir card tabel-->

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>