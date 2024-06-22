<?php

if($_COOKIE['start'] === "1"){
    header('Location: converter.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Smile-Converter</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="content">
                <div class="left">
                    <div class="left_content">
                        <div class="title">
                            <h2>Smile Converter</h2>
                        </div>

                        <div class="text">
                            <h3>Преобразовывай текст в смайлы</h3>
                        </div>
                        <div class="button_container"><a href="converter.php" class="button">Начать</a></div>
                    </div>
                </div>

                <div class="right"><img src="img/phone3.png" alt=""></div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </header>

    <section class="about">
        <div class="container">
            <div class="content_about">
                <div class="about_block_cont">                
                    <div class="ab">
                        <div class="about_block"><h2>1</h2></div>
                        <div class="abt"><h2>Настрой конвертер под себя</h2></div>
                    </div>

                    <div class="hr_block"></div>

                    <div class="ab"><div class="about_block"><h2>2</h2></div><div class="abt"><h2>Конвертируй текст в смайлы</h2></div></div>


                    <div class="hr_block"></div>

                    <div class="ab"><div class="about_block"><h2>3</h2></div><div class="abt"><h2>Отсылай друзьям</h2></div></div>

                </div>
            </div>
        </div>
    </section>
</body>
</html>