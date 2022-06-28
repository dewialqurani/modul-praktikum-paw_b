<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prak3 Soal 1</title>
</head>
<body>
<?php   
  // membuat variabel error dan diset kosong   
  $nameErr = $emailErr = $genderErr = $websiteErr = "";   
  //membuat variabel untuk menampung inputan dari form   
  $name = $email = $gender = $comment = $website = "";   
  //membuat fungsi untuk validasi input form  
  function test_input($data) {   
   $data = trim($data);   
   $data = stripslashes($data);   
   $data = htmlspecialchars($data);   
   return $data;   
  }    
  ?>
  <h2>Modul 3 - PAW 4B <br><?php echo "PHP Form Validasi";?><h3>
  <h3>Nama : <?php echo "Dewi Imani Al Qur' Ani";?><br>Nim : 200411100014<h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span class="error" style="color:red">* required field</span>
    <br><br>
    <label for="">Name: </label>
    <input type="text" name="name">
    <span class="error" style="color:red">* <?php echo $nameErr;?></span>
    <br><br>
    <label for="">E-mail: </label>
    <input type="text" name="email">
    <span class="error" style="color:red">* <?php echo $emailErr;?></span>
    <br><br>
    <label for="">Website: </label>
    <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    <label for="">Comment: </label>
    <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    <label for="">Gender: </label>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error" style="color:red">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
  //menampilkan hasil dari inputan form  
  echo "<h1>Your Input:</h1>";  
  // echo $name;   
  // echo "<br>";   
  // echo $email;   
  // echo "<br>";   
  // echo $website;   
  // echo "<br>";   
  // echo $comment;   
  // echo "<br>";   
  // echo $gender;   
?>
</body>
</html>