<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>login</title>
    
    <style>
        .container{
            width: 400px;
            margin-top: 200px;
            padding: 10px;
        }
    </style>
  </head>
  <body>
    <?php
    //untuk membuat user dan pass login
    $user = 'dewi';
    $pass = 'alqurani';

    session_start(); //untuk memulai session
    //untuk cek cookie 
    if(isset($_COOKIE['rememberme'])){
        if ($_COOKIE['rememberme'] == $user){
            $_SESSION['login'] = TRUE;
            header('location: home.php');
            exit();
        }
    }
 
    //setcookie untuk menyimpan data di browser.
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == $user && $password == $pass){
        if (isset($_POST['remember'])){
            setcookie('rememberme', $user, time() + 3600);
            $_SESSION['login'] = TRUE; //dak bisa login
        }
        header('location: home.php');
        } else {
            echo "<script>
                    alert('Username atau Password Salah!!!');
                    document.location.href='index.php'
                </script>";
        }
    }
    ?>

    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
            <label for="username" class="form-label"><b>Username</b></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success" name="login">Login</button>
            </div>
            <br>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                Remember Me
            </label>
            </div>
        </form>
    </div>
  </body>
</html>