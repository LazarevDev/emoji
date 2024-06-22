<?
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    require_once("text.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text">
        <input type="submit" name="submit">
    </form>

    <?=$s?>
</body>
</html>