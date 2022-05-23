<?php
session_start();
require_once("components/connect.php");
?>
<?php
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}
if (empty($login) or empty($password)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!<a href='index.php'>повторить попытку</a>");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
$result = mysqli_query($link, "SELECT * FROM table1 WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password'])) {
    exit("Извините, введённый вами логин или пароль неверный.<a href='index.php'>повторить попытку</a>");
} else {
    if ($myrow['password'] == $password) {
        $_SESSION['login'] = $myrow['login'];
        $_SESSION['cart'] = array();
        header('location: index.php');
    } else {
        exit("Извините, введённый вами логин или пароль неверный.<a href='index.php'>назад</a>");
    }
}
?>