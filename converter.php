<?php

require_once('radio.php');

if(empty($_COOKIE['start'])){
    setcookie('start', '1');
}


if(isset($_POST['sub_smilse'])){
    $bg_radio = $_POST['bg'];
    $txt_radio = $_POST['txt'];
    setcookie('bg_radio', $bg_radio);
    setcookie('txt_radio', $txt_radio);

    header('Location: converter.php');
}


if(isset($_POST['submit'])){
    if(!empty($_POST['text'])){
        $text = $_POST['text'];
        $text = mb_strtolower($text);
        require_once('text.php');


        $text_copy = str_replace('✨', $bg, $s);
        $text_copy = str_replace('❤', $txt, $text_copy);       

        $bg_sub = str_replace('✨', "<img src='img/".$_COOKIE['bg_radio'].".png' height='20px' alt=''>", $s);

        $txt_sub = str_replace('❤', "<img src='img/".$_COOKIE['txt_radio'].".png' height='20px' alt=''>", $bg_sub);

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>   
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/converter.css">
    <title>Smile-Converter</title>
</head>
<body>
<!-- Убераем тег h2 из текста для копирования -->

<?php

    $text_copy = str_replace('<h2>', '', $text_copy);
    $text_copy = str_replace('</h2>', '', $text_copy);

?>

<div class="md">
    <div class="container">
        <!-- Само окно -->
        <div id="boxes">  
            <div id="dialog" class="window"> 
                <?php require_once('form.php'); ?>
            </div>
        </div>
    </div>
</div>


<!-- Маска, затемняющая фон -->
<div id="mask"></div>

<div class="fix_top">
    <header>
        <div class="container">
            <div class="header_container">
                <div class="logo"><img src="img/logo2.png" alt=""></div>
            </div>
        </div>
    </header>
</div>


    <section class="dialog">
        <div class="container">
            <div class="dialog_container">
                <?php if($text){ ?>
                    <div class="content_dialog">
                

                        <div class="right_container">
                            <div class="right">
                            
                            <h2><?php echo "Вы ввели: ".$text; ?></h2></div>
                        </div>

                        <div class="left_container">
                            
                            <div class="left">
                            <div class="button_container_left">
                                    <textarea id="html" class="none_textarea"  name="html" cols="0" rows="0"><?php echo $text_copy; ?></textarea>
                                    <input type="button" class="Refresh" value="Копировать" onclick="copy_to_clipboard('html');"> 
                                </div>    
                                <h2><?php echo $txt_sub; ?></h2></div>
                        </div>
                    </div>
                    <?php }else{ ?>
                        <div class="empty">
                            <div class="content_empty">
                                <div class="block_empty">
                                    <h2>Введите текст</h2>
                                    <img src="img/arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <div class="fix_bottom">
        <footer>
            <div class="container">
                <div class="footer_container">
                    <form action="" method="post">
                        <a href="#dialog" class="d_btn" name="modal"><img src="img/setting.png" alt=""></a>
                        <input type="text" name="text" class="input_txt" placeholder="Введите текст">
                        <button name="submit" class="input_btn"><img src="img/sub.png" alt=""></button>
                    </form>
                </div>
            </div>
        </footer>
    </div> 
</body>
</html>


<script type="text/javascript">
    function copy_to_clipboard(id){
        document.getElementById('html').select();
        document.execCommand('copy');
    }
</script>