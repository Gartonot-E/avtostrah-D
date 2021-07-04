<?php

$data = $_POST['data'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mark = $_POST['mark'];
$model = $_POST['model'];
$mosh = $_POST['mosh'];
$year = $_POST['year'];
$ptssts = $_POST['ptssts'];
$seria = $_POST['seria'];
$number = $_POST['number'];
$dateVidachi = $_POST['dateVidachi'];

if(empty($_POST['numberCard'])) { $numberCard = ''; } else { $numberCard = $_POST['numberCard']; }
if(empty($_POST['srok'])) { $srok = ''; } else { $srok = $_POST['srok']; }

$nameSobsvennik = $_POST['nameSobsvennik']; 
$yourAddres = $_POST['yourAddres'];
$srokStrah = $_POST['srokStrah'];

if($numberCard == '') {
    $diagnosCard = "";
} else {
    $diagnosCard = "<li>Номер диагностической карты: ".$numberCard."</li><li>Скро действия до: ".$srok."</li>";
}

$message  = "<h2>Здраствуйте, меня зовут ".$nameSobsvennik.", мне нужен расчёт стоимости страхования.</h2>";
$message .= "<p>Вот мой номер телефона для связи: ".$phone."</p>";
$message .= "<p>Вот перечень необходимых данных для расчёта:</p>";
$message .= "<ul>";
$message .= "<li>Дата начала страхования: ".$data."</li>";
$message .= "<li>Марка транспортного средства: ".$mark."</li>";
$message .= "<li>Модель транспортного средства: ".$model."</li>";
$message .= "<li>Мощность, л.с.: ".$mosh."</li>";
$message .= "<li>Год выпуска: ".$year."</li>";
$message .= "<li>Документ на автомобиль (ПТС  или СТС): ".$ptssts."</li>";
$message .= "<li>Серия: ".$seria."</li>";
$message .= "<li>Номер: ".$number."</li>";
$message .= "<li>Дата выдачи: ".$dateVidachi."</li>";
$message .= $diagnosCard;
$message .= "<li>ФИО: ".$nameSobsvennik."</li>";
$message .= "<li>Адресс: ".$yourAddres."</li>";
$message .= "<li>Срок страхования: ".$srokStrah." месяца</li>";
$message .= "</ul>";
$message .= "<br><hr> буду ждать вашего ответа!";

$to = "avtostrahovka161@gmail.com";
$from = $email;
$subject = "Автострахование | Расчёт стоимости страхования";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
$m = mail($to, $subject, $message, $headers);


if($m) {
    header("Location: pages/calc.php/?msgSuc=Ваше письмо успешно отправлено");
} else {
    header("Location: pages/calc.php/?msgErr=Ошибка, отправки письма, попробуйте ещё раз");
} 