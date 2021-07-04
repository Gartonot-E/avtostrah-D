<? require_once '../../header.php'; ?>

<section class="register main-section">
    <div class="container">
        <h2>Авторизация</h2>
        <div class="form_send">
            <form action="#">
                <p class="error-message"></p>
                <input type="text" placeholder="E-mail" id="loginMail">
                <input type="password" placeholder="Пароль" id="loginPassword">
                <button id="sendLogin">Войти</button>
            </form>
        </div>
        <small>Ещё нет аккаунта? <a href="register.php">Регистрация</a></small>
    </div>
</section>

<? require_once '../../footer.php'; ?>