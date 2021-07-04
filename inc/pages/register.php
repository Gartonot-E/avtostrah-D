<? 
// Подключаем шапку сайта
require_once '../../header.php';

// Регистрация 
// ПРоверяем на нажатие кнопки и на заполненность данных
if(isset($_POST['done']) && !empty($_POST['email']) && !empty($_POST['password'])){
    // Создаём переменные и присваиваем значение с формы
    $mail = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // Делаем запрос в БД на проверку существуеющих пользователей и достаём 1 запись
    $user = $db->query("SELECT * FROM `users` WHERE `mail` = '".$mail."'")->fetch(PDO::FETCH_ASSOC);

    // Если найдена хотя б 1 запись, то выдать сообщение об ошибки
    if(isset($user['mail'])) {
        $message['error'] = "Такой пользователь уже существует";
    } else {
        // Если пользователь не найден, то отправляем данные в бд
        $putUser = $db->query("INSERT INTO `users` (`mail`, `password`) VALUES ('".$mail."', '".$password."')");
        // Уведомляем об успешной регистрации и предлагаем авторизоваться
        if($putUser) {
            $success['success'] =  'Вы успешно зарегистрированны <a href="login.php">Войти</a>';
        }
    }
} else {
    // В случае, если пользователь не ввёл данные - уведомить об ошибке
    $message['error'] = "Заполните поля";
} ?>

<section class="register main-section">
    <div class="container">
        <h2>Регистрация</h2>
        <div class="form_send">
            <form method="POST">
                <?
                    // Выводим ошибки
                    if(isset($_POST['done']) && !empty($message)) {
                        echo "<p class='error-message visible' style='display: block;'>".@array_shift($message)."</p>";
                    }

                    // Выводим сообщение об успехе
                    if(isset($_POST['done']) && !empty($success)) {
                        echo "<p class='success-message visible' style='display: block;'>".@array_shift($success)."</p>";
                    }
                ?>
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Пароль" name="password">
                <button name="done" type="submit">Зарегистрироваться</button>
            </form>
        </div>
        <small>Есть аккаунт? <a href="login.php">Войти</a></small>
    </div>
</section>

<? 
// Подключаем подвал сайта
require_once '../../footer.php';
?>