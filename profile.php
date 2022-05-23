<?php

session_start();

if (!isset($_SESSION['Login'])) {
    header('Location: /index/register.php');
} else {
?>

    <?php
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `table1` WHERE Email='$login'");
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
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="glavnaya.css" type="text/css">
    <link rel="stylesheet" href="burger.css" type="text/css">
    <title>Сайт новостей</title>
</head>

<body>

    <header>
        <div class="block9">
            <div class="menu">
                <div class="logo"><a href="index.php" class="link">Novosti</a></div>
                <ul class="knopki">
                    <li><a href="korona.php" class="link">Коронавирус</a></li>
                    <li><a href="politika.php" class="link">Политика</a></li>
                    <li><a href="#" class="link">Происшествия</a></li>
                    <li>
                        <?php
                        session_start();
                        if (!isset($_SESSION['Login'])) { ?>
                            <a href="login.php" class="link">Личный кабинет</a>
                        <?php } else { ?>
                            <a href="profile.php" class="link">Личный кабинет</a>
                            <a href="exit.php" class="link">Выход</a>
                        <?php }
                        session_write_close();
                        ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="block8">

            <nav class="mobile-menu">
                <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
                <label for="checkbox" class="mobile-menu__btn">
                    <div class="mobile-menu__icon"></div>
                </label>
                <div class="mobile-menu__container">
                    <ul class="mobile-menu__list">
                        <li class="mobile-menu__item"><a href="index.php" class="mobile-menu__link">Novosti</a></li>
                        <li class="mobile-menu__item"><a href="korona.php" class="mobile-menu__link">Коронавирус</a></li>
                        <li class="mobile-menu__item"><a href="politika.php" class="mobile-menu__link">Политика</a></li>
                        <li class="mobile-menu__item"><a href="" class="mobile-menu__link">Происшествия</a></li>
                        <li class="mobile-menu__item"><?php
                                                        session_start();
                                                        if (!isset($_SESSION['Login'])) { ?>
                                <a href="login.php" class="mobile-menu__link">Личный кабинет</a>
                            <?php } else { ?>
                                <a href="profile.php">Личный кабинет</a>
                                <a href="exit.php">Выход</a>
                            <?php }
                                                        session_write_close();
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="main">
        <style>
            input {
                margin-top: -12px;
            }
        </style>
        <div class="form">
            <br>
            <H1 style="text-align: center;">Личный кабинет</H1>
            <form class="form-reg" action="/index/login/signin.php" method="POST">
                <p>Ваше имя</p>
                <input value="<?php echo $row[1]; ?>" />

                <p>Ваша фамилия</p>
                <input value="<?php echo $row[2]; ?>" />

                <p>Ваша почта</p>
                <input value="<?php echo $row[3]; ?>" />
                <br><br>
                <a href="comments/index.php" class="knopka">Оставить комментарий</a>

                <!-- <br><br>
		<button type="submit" class="button-action">Сохранить</button> -->
            </form>
        </div>


    </main>
    <footer class="footer">
        <div class="menu">
            <div class="logo"><a>©Copyright.Все права защищены. Novosti 2022-2022</a></div>
            <ul class="knopki">
                <li><a href="https://vk.com/" class="link_2">Вконтакте</a></li>
                <li><a href="https://www.youtube.com/" class="link_2">Ютуб</a></li>
                <li><a href="https://www.reddit.com/" class="link_2">Реддит</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>