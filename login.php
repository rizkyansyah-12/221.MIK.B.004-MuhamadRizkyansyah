<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Login</h3>
    <form action="" method="POST">
        <label >E-mail</label>
        <input type="email" name="email"><br>

        <label>Password</label>
        <input type="password" name="password"><br>

        <button type="submit" name="login">LOGIN</button>
    </form>
</body>
</html>

<?php 
$email_login = 'admin@gmail.com';
$pw_login ='123456';

if (isset($_POST['login'])) {
     $email = $_POST['email'];
     $password= $_POST['password'];

     if (($email === $email_login) && ($password === $pw_login)) {
        echo "Login Berhasil <br>";
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['pw'] = $password;
        header('Location:siswa.php');

        // $pw_md5 = md5($pw_login);
        // echo $pw_md5.'<br>';


    }else {
        echo "Gagal";
    }
         

     //echo $email.', '.$password;//

 } 

 ?>