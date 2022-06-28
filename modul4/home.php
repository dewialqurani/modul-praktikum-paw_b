<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>home</title>
    <style>
        .container{
            width: 800px;
            margin-top: 200px;
            padding: 10px;
        }
    </style>
  </head>
  <body>
    <?php
        session_start();
        if(empty($_SESSION['login'])){
            echo "<script>
                alert('Silahkan Login terlebih dahulu!!!');
                document.location.href='index.php'
            </script>";
        }

        if(isset($_POST["logout"])){
            session_start();
            session_destroy();
            if(isset($_COOKIE['rememberme'])){
                setcookie("rememberme", time() - 3600);
            }
            header('Location: index.php');  
        }
    ?>
    <div class="container">

    <table class="table table-bordered">
        <thead>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php
            $data = [
                ["Dewi Imani Al Qur Ani",200411100014,"Probolinggo"],
                ["Astia Nurrahmayanti",200411100083,"Surabaya"],
                ["Alvina Maharani",200411100049,"Tuban"],
                ["Moch. Rizki Aji Santoso",200411100086,"Lamongan"],
                ["Muhammad Hanif Santoso",200411100078,"Banten"],
            ];
            
            $baris=count($data);
            $kolom=count($data[0]); //


            for($i=0; $i<$baris;$i++){
                echo"<tr>";
                for($j=0; $j<$kolom;$j++){
                    echo "
                    <td>".$data[$i][$j]."</td>
                    ";
                }
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="" method="POST">
        <button type="submit" class="btn btn-danger" name="logout">Logout</button>
    </form>
    </div>
  </body>
</html>