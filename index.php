<?php 
    require 'components/connect.php';
    session_start();
    
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hik</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/js.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

<div class="topnav">
     <div><a class="active" href="index.php">ХИК</a>
  <a href="statii.php">Статьи</a>
  <a href="o nas.php">О нас</a>
  <button id="myBtn">Авторизация/Регистрация</button>
  
  
  </div>
  
  <div>
  <a href="admin.php"> <?php 
echo $_SESSION['login'] ;
?></a>

<a href="logout.php">Выход</a>
  </div>
</div>






    <div class="section-main">
    <div class="slideshow-container">

<div class="mySlides fade" style="border: 1px solid #ccc;">
  <div class="numbertext">1 / 3</div>
  <img src="/nem/img/slider1.jpg" style="width:100%">
   <!-- <div class="text">Caption Text</div>-->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/nem/img/slider2.jpg" style="width:100%">
  <!--<div class="text">Caption Two</div>-->
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script>
<p style="font-size:18px; text-align:center; color:#35B7C5">Блог-форум «ХИК»</p>
<div style="border:3px solid #35B7C5;border-radius: 45px;padding:20px ">
<p>Благотворитеьный фонд «Движение вверх» создан в 2021 году и оказывает помощь детям с инвалидностью. Мы помогаем им пройти жизненно необходимую реабилитацию в специализированных центрах и по возможности вернуться к обычной жизни.</p>

<p>Не случайно символом нашего фонда мы выбрали парящую птицу — прообраз летательного аппарата Леонардо да Винчи. Механическая птица гения эпохи Ренессанса дала первую надежду на полет всем, кто мечтал об этом вопреки законам физики и физиологии, вопреки тотальному отрицанию возможности полета.</p>

<p>Для детей с ограниченными возможностями здоровья залогом прогресса в лечении и реабилитации является движение. Зачастую это движение тоже вопреки ограничениям. Но благодаря вере в успех и поддержке всех, кто помогает, движение становится возможным. Кстати, сам выдающийся художник тоже страдал от одной из форм ДЦП, что не помешало ему творить и стать великим мастером.</p>


</div>
<br>
<div class="cards">
<div class="card">
  <img src="/nem/img/3.png" alt="aleksandra-mihajlova" style="width:100%">
  <h1>Линия Жизни</h1>
  <p class="price">Благотворительный фонд</p>
  <p><button>Помочь</button></p>
</div>

<div class="card">
  <img src="/nem/img/4.png" alt="mark-skrylnikov" style="width:100%">
  <h1>Подари жизнь</h1>
  <p class="price">Благотворительный фонд</p>
  <p><button>Помочь</button></p>
</div>

<div class="card">
  <img src="/nem/img/44.png" alt="vasilisa-hvisjuchik" style="width:100%">
  <h1>Дети наши</h1>
  <p class="price">Благотворительный фонд</p>
  <p><button>Помочь</button></p>
</div>
</div>


    </div>
  </div>
  <!-- Стрелки для перехода к предыдущему и следующему слайду -->
  <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
  <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
</div>
<div class="wrapper">

	<div class="content"></div>
    <a href="#" style="font-family:	Arial Black">Главная</a>
    <a href="#" style="font-family:	Arial Black">Опроекте</a>
    <a href="#" style="font-family:	Arial Black">Тех. Поддержка</a>
	<div class="footer"></div>

</div>

<p></p>
       
<!-- <?php 
        if(!$_SESSION['user']){
    ?>
<form class="form-reg" action="action/action.php" method="POST">
        <span class="label">login:<span>
        <input type="text" name="login" required>

        <span class="label">mail:</span>
        <input type="text" name="mail" required>

        <span class="label">password:</span>
        <input type="text" name="password" required>

        <input type="submit" value="Регистрация" name="submit">
    </form>
    <form class="form-reg" action="action/action.php" method="POST">
        <span class="label">login:<span>
        <input type="text" name="login" required>

        <span class="label">mail:</span>
        <input type="text" name="mail" required>

        <span class="label">password:</span>
        <input type="text" name="password" required>

        <input type="submit" value="Регистрация" name="submit">
    </form>
   
    <?php 
        }
    ?>
      -->
    <script src="js/js.js"></script>
</body>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Модальное содержание -->
  <div class="modal-content">
    <div class="modal-body">

    <span class="close">&times;</span>

<section class="modal_form" id="formas">
 <input type="radio" id="aut" checked name="rad" value="aut">
 <input type="radio" id="reg"  name="rad" value="reg">

    <div class="for">
 <div id="reg" class=" form">
    <form action="registr.php" method="post" align = "center">
      <h1>Регистрация</h1>
            <p><h3>Логин</h3><input type="text" name="login" >
            <p><h3>Пароль</h3><input type="password" name="password" >
            <p><input type="submit" value="Регистрация" name = "submit">
            </form>
            <div class="rad">
 <ul id="forma">
 <li>


 <div class="label"><label for="reg" id="reg" >
  <h4 align = "center" class="bord" >Авторизация</h4></label>
 </li>
 </ul>
 </div>
 </div>
 </div>
 <div class="for">
 <div id="aut" class=" form">
            <form action="autoriz.php" method="post" align = "center">
            <h1>Авторизация</h1>
            <p><h3>Логин</h3><input type="text" name="login" >
            <p><h3>Пароль</h3><input type="password" name="password" >
            <p><input type="submit" value="Авторизация" name = "submit">
           <div class="rad">
         <ul id="forma">
          <li>
          <div class="label"> <label for="aut" id="aut" >
         <h4 align = "center" class="bord">Регистрация</h4></label></div>
         </li>
      </ul>
      </div>
            </form>
 </div>
 </div>
      </section>
  </div>
</div>
    </div>
  </div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>
<?php
    mysqli_close($link);
?>

