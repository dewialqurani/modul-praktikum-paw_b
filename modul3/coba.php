<?php
$cek = " ";
if ($_SERVER['REQUEST_METHOD']=='POST') {
if (empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['web']) || empty($_POST['komen'])){
$cek = "* field required";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>form | kharisma</title>
<style>
.notif{
color:red;
}
</style>
</head>

<body>
<h3>Nama : Kharisma Intan</h3>
<h3>NIM : 200411100010</h3> </br>
<h1>PHP Form Validation Example</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<span class="notif">
<?php echo $cek;
?>
</span>
</br> </br>

<label for="nama">Nama :</label>
<input type="text" id="nama" name="nama" >
<span class="notif">
*
</span>
</br></br>
<label for="email">E-mail :</label>
<input type="text" id="email" name="email" >
<span class="notif">
*
</span>
</br></br>

<label for="web">Website :</label>
<input type="text" id="web" name="web" ></br></br>

<label for="komen">Comment :</label>
<textarea rows="4" id="komen" name="komen" ></textarea> </br> </br>

<label for="gender" >Gender :</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<span class="notif"> * </span>
</br> </br>
<button name="submit" type="submit" >submit</button>
</form>
<h1>Your Input</h1>
</body>
</html>
