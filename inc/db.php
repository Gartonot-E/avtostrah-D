<?
// Подключение к базе
try {
    $db = new PDO('mysql:host=localhost;dbname=c39047_avto_strahovka161_ru', 'c39047_avto_strahovka161_ru', 'WuMsuQamxifos94');
} catch (PDOExeptions $e) {
    print $e->getMessage();
    die();
}