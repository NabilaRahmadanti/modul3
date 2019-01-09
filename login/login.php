<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body{
    background-image: url(5.png);
    background-size:95%;
}

h1{
    text-align: center;
    font-size: 30px;
    color: black;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
    margin : 20%;
    margin-left : 42%;
}
    </style>

</head>
    <body>
    <div class="kotak">
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "nabila" && $password == "123") 
    {
        echo "<h1><b> LOGIN BERHASIL </b></h1>";
    } 
    else 
    {
        echo "<h1><b> GAGAL </b></h1>";
    }   
?>
    </div>
  </body>
</html>

