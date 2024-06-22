<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pace.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>    
</head>
<body>


<!-- Загрузочный экран -->

<div class="preloader">
   <div class="preloader__loader">
       <div class="spinner-grow text-danger" role="status" style="width: 4rem; height: 4rem;">
           <img src="img/load.gif" alt="">      
       </div>
   </div>
</div>

<script>
   // Preloader page
   jQuery(document).ready(function($) {
       $(window).on('load', function () {
           var $preloader = $('.preloader'),
               $loader = $preloader.find('.preloader__loader');
           $loader.fadeOut();
           $preloader.delay(250).fadeOut(200);
       });
   });
</script>

<!-- header -->

<header>
    <div class="proz">
        <div class="container">
            <div class="title">
                <h2>Emoji Converter</h2>
                <h3>Преобразовывай текст в эмоджи</h3>
            </div>

            <form action="action.php" class="header_form" method="post">
                <input type="text" autocomplete="off" name="text" placeholder="Введите текст">
                <button type="submit" class="header_submit" value="" name="submit"><img src="img/sub.png" alt=""></button>
            </form>

            <div class="title">
                <h4>Например: привет, как дела</h4>
            </div>


        </div>
    </div>
</header>



</body>
</html>
