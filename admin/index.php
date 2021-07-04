<?
session_start();
$loginAdmin = 'admin';
$passwordAdmin = '18112346503';

if($loginAdmin == $_POST['login'] && $passwordAdmin == $_POST['password'])
    $_SESSION['admin'] = $_POST['login'];
    

if(isset($_SESSION['admin'])) {
    header('Location: panel.php');
} else {
?>
<style>
    body { display: flex; align-items: center; justify-content: center; height: 90vh; background: #2e405f; font-family: Arial; color: #fff; }
    form { display: flex; flex-direction: column; }
    form label { margin-bottom: 20px; } 
    form input { width: 100%; padding: 10px 5px; margin-top: 5px; border-radius: 4px; }
    form input[type="submit"] { background: #46b198; border: none; color: #fff; font-weight: bold; }
</style>
<body>
    <form method="POST">
        <h2>Вход в админ панель</h2>
        <label for="login">
            <span>Логин</span>
            <input type="text" name="login" id="login">
        </label>
        <label for="password">
            <span>Пароль</span>
            <input type="password" name="password" id="password">
        </label>
        <input type="submit" value="Войти">
    </form>  
</body>
<? } ?>