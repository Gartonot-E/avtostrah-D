<?php


require_once 'db.php';

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


$res = $db->query("INSERT INTO `strah` 
            (`data`, `phone`, `email`, `mark`, `model`, `mosh`, `year`, `ptssts`, `seria`, `number`, `dateVidachi`, `numberCard`, `srok`, `nameSobsvennik`, `yourAddres`, `srokStrah`) 
            VALUES 
            ('".$data."', '".$phone."', '".$email."', '".$mark."', '".$model."', '".$mosh."', '".$year."', '".$ptssts."', '".$seria."', '".$number."', '".$dateVidachi."', '".$numberCard."', '".$srok."', '".$nameSobsvennik."', '".$yourAddres."', '".$srokStrah."')");

if($res) {
    header('Location: pages/calc.php?visibleS=visible&dea=deactive&textSuccess=Ваши данные успешно отправлены на обработку, ожидайте, в ближайшее время с вамя свяжутся');
} else {
    header('Location: pages/calc.php?visibleE=visible&textError=Ошибка запроса в бд, проверьте введённые данные');
}