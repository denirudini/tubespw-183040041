<?php
if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
        header("Location: halaman_admin.php");
        exit;
    }else{
        $error = true;
    }
}
?>


<html>
    <head>
        <title>Latihan5e_183040041/title>
        <style>
        body{
            background-color:yellow;
            font-family:sans-serif;
            text-align:center;
        }
        button{
            margin-top:10px;
        }
        input{
            margin:5px;
        }
        </style>
    </head>
    <body>
        <h1>Login Admin</h1>
        <?php if(isset($error)){?>
        <p style="color:red;"></i>username/password salah!<i></p>
        <?php } ?>
        <img src="../Tugas3/assets/img/images.png" alt="tahilalats" width="100" height="100">
        <form action="" method="post">
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="password" placeholder="password" ><br>
            <button type="submit" name="submit">Login</button>
        </form>

    </body>
</html>