<?php 
    session_start();
    require_once("components/connect.php");
?>
<?php


if (!isset($_SESSION['login'])) {
    header('Location: ./reg.php');
} else {
?>

    <?php
    require_once 'components\connect.php';
    $login = $_SESSION['ogin'];
    $testquery = mysqli_query($link, "SELECT * FROM `table1` WHERE login='$login'");
    $row = mysqli_fetch_array($testquery);
    //echo $row[4];


    ?>



<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(!isset($_SESSION['login'])){
?>
    Нужно зарегаться<a href="index.php">Уйти</a>
<?php
    }else{
?>
  

<?php
    }
?>
<main class="main">
        <style>
            input {
                margin-top: -12px;
            }
        </style>
        <div class="form">
            <br>
            <H1 style="text-align: center;">Личный кабинет</H1>
            <form class="form-reg" action="/nem/signin.php" method="POST">


                <p>Ваш логин</p>
                 <?php echo $_SESSION['login']; ?> 

                
                <br><br>
                

                <!-- <br><br>
		<button type="submit" class="button-action">Сохранить</button> -->
            </form>
        </div>


    </main>
    <div>
        <form action="logout.php">
            <input type="submit" name="logout" value="Выйти">
            <a href="index.php">Главная</a>
    </div> 
</body>
</html>