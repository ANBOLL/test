<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/feedbackmobile.css">
    <link rel="stylesheet" href="css/headermobile.css">
    <link rel="stylesheet" href="css/footermobile.css">
    <meta name="viewport" content="width=800px, initial-scale=-1">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo 1.svg" />
    <title>FEEDBACK</title>
</head>
<body>

    <?php 
    $code = "Feedback";
    include_once("header.php");
     ?><hr class="hr_feedback_main">
    <main class="main_ok">

        <div class="ok_feedback">
            <h1 class="h1_ok">Мы получили ваше сообщение!</h1>
            <div class="div_image"></div>
            <div class="buttons_ok">
            <a class='button_ok' href="feedback.php">Назад</a>
            <a class='button_ok' href="index.php">На главную</a>
            </div>
        </div>
<?php 

/*
$varTest = "Hello word";
$s = '$abc123_c';
$v = preg_match('{^\$[a-zA-Z|_]+([0-9]+)?[a-zA-Z|_]+$}', $s);
var_dump($v);

$mail = 'in..fo@test.ru';
$pregmail = preg_match('{^([a-zA-Z]|[0-9])([a-zA-Z]|[0-9]|[\_\.\-])+@[a-zA-Z|[0-9]|-]+\.[a-zA-Z]+$}', $mail);
var_dump($pregmail);

$nums = '+79531834855';
$pregnum = preg_match('{^(((\+)?[7])|((\+)?[7](\s)))((\d{3})|(\()(\d{3})(\)))(\s)?(((\d{3})(-)(\d{2})(-)(\d{2})|(\d{3})(\d{2})(\d{2})|(\d{3})\s(\d{2})\s(\d{2})))$}', $nums);
var_dump($pregnum);

$test = "a=1 ajjd b=2 hygs njsd cf=45";
$pregtests = preg_match_all('{[a-z]+=[0-9]+}', $test, $match, PREG_SET_ORDER);
var_dump($match);
*/
?>



    </main>
    <?php include_once("footer.php"); ?>
</body>
</html>