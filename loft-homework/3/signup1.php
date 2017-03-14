<?php

$dbc = mysqli_connect('localhost', 'root', '', 'HomeWork3');

if(isset($_POST['submit'])){
    echo 'Yes';
} else {
    echo 'No';
}

/*if ($dbc == false){
    echo 'не удалось подключиться к базе данных! <br>';
    echo mysqli_connect_error();
    exit();
};*/
?>


<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=Windows-1251" http-equiv="content-type"/>
    <link rel="stylesheet" href="styles.css" media="screen" />
    <title>HomeWork3</title>
</head>
<body link="black" vlink="black" alink="black" bgcolor="black">
<content>
    <center>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"></form>
        <br><br><br>
    <input type="text" placeholder="Insert your login" name="username"><br><br>
    <input type="password" placeholder="Insert your password" name="password1"><br><br>
    <input type="password" placeholder="Password once more" name="password2"><br><br>
    <button name="submit">Enter</button><br><br>
    </center>
</content>

<footer><center>&copy;&nbsp; 2017 Pilk </center></footer>
</body>
</html>



