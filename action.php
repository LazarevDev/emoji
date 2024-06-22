<?

if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $text = mb_strtolower($text);

    $text_file = $text."-".$_SERVER['SERVER_ADDR'];
    $filename = 'text.txt';
    file_put_contents($filename, PHP_EOL . $text_file, FILE_APPEND);

    if(!empty($_POST['text'])){
        require_once('text.php');
    }else{
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action.css">
    <link rel="stylesheet" href="pace.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
<header>
    <div class="container">
        <div class="head">
           <a style="text-decoration: none;" href="index.php"><div class="logo">
                <h2>Emoji</h2>
                <h3>Converter</h3>
            </div></a>

            <form action="action.php" class="header_form" method="post">
                <input type="text" name="text" autocomplete="off" placeholder="Введите текст">
                <button type="submit" class="header_submit" value="" name="submit"><img src="img/sub.png" alt=""></button>
            </form>
        </div>
    </div>
</header>
    
<?php  
    $s1 = str_replace('<h2>', '', $s);
    $s2= str_replace('</h2>', '', $s1);


?>

<section class="about">
    <div class="container">
        <div class="title"><h2>Вы ввели: <?=$text?></h2></div>

        <div class="hr_container">
            <div class="hr"></div>
        </div>

     
        <div class="center">
            <?php if(isset($_POST['submit'])){ ?>
                <textarea id="html"  name="html" cols="0" rows="0"><?=$s2?></textarea>
                <input type="button" class="Refresh" value="Копировать" onclick="copy_to_clipboard('html');"> 
                <div class="button"><a href="index.php">Назад</a></div>

            <?}?>
        </div>
    </div>
</section>

<?
$s = str_replace('<h2>', '', $s);
    $s = str_replace('</h2>', '</br>', $s);
    $s = str_replace('✨', '<img src="img/2.png" alt="">', $s);
    $s = str_replace('❤', '<img src="img/1.png" alt="">', $s);

    echo $s;?>


</body>
</html>

<script type="text/javascript">
    function copy_to_clipboard(id){
        document.getElementById('html').select();
        document.execCommand('copy');
    }
</script>