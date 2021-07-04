<?
// Запускаем сессию
session_start();
// Подключаем базу данных
require_once '../../inc/db.php';

// Авторизация
// Проверка на существование переменных и нажатие кнопки
if(isset($_POST['done']) && !empty($_POST['email']) && !empty($_POST['password'])){
    // Сохраняем значение в переменные
    $mail = $_POST['email'];
    $password = $_POST['password'];
    // Делаем запрос на проверку существования пользователя
    $user = $db->query("SELECT * FROM `users` WHERE `mail` = '".$mail."'")->fetch(PDO::FETCH_ASSOC);

    // Проверяем пользователя на логин
    if($user['mail'] == $mail && isset($user['mail'])) {
        // Проверяем пользователя на пароль, если всё ок, то создаём сессию и пускаем дальше пользователя
        if(password_verify($password, $user['password'])){
            $_SESSION['user_name'] = $user['mail'];
            header("Location: calc.php");
        } else {
            // Если пароль не верен - создаём массив ошибок
            $message['error'] = "Пароль не верный!";
        }
    } else {
        // Если логин не верен - создаём массив ошибок
        $message['error'] = "Такого логина не существует";
    }   
} else {
    // Если поля пустые - создаём массив ошибок
    $message['error'] = 'Заполните все поля!';
}

// Если пользователь случайно попал на эту страницу 
// и он авторизован, то его  перекинет на расчёт формы,
// иначе покажеться форма авторизации
if(isset($_SESSION['user_name'])) {
    header("Location: calc.php");
} else { ?>
<? require_once '../../header.php'; ?>

    <section class="register main-section">
        <div class="container">
            <h2>Авторизация</h2>
            <div class="form_send">
                <form method="POST">
                    
                    <?
                        // Выводим массив ошибок, если нажата кнопка
                        if(isset($_POST['done'])){
                            echo "<p class='error-message visible' style='display: block;'>".@array_shift($message)."</p>";
                        }
                    ?>
                    <input type="email" placeholder="E-mail" name="email">
                    <input type="password" placeholder="Пароль" name="password">
                    <button name="done" type="submit">Войти</button>
                </form>
            </div>
            <small>Ещё нет аккаунта? <a href="register.php">Регистрация</a></small>
        </div>
    </section>
<? require_once '../../footer.php'; ?>
<? } ?>
