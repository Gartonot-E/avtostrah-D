<? require_once '../../header.php' ?>

<section class="register main-section">
    <div class="container">
        <h2>Регистрация</h2>
        <div class="form_send">
            <form action="#">
                <p class="error-message"></p>
                <p class="success-message"></p>
                <input type="text" placeholder="ФИО" id="registerName">
                <input type="text" placeholder="Телефон" id="registerPhone">
                <input type="text" placeholder="E-mail" id="registerMail">
                <input type="password" placeholder="Пароль" id="registerPassword">
                <label for="opd" style="font-size: 16px; margin-top: 20px; display: block; color: #c4c4c4">
                    <input style="width: inherit;" id="opd" type="checkbox" checked required>
                    Согласен с обработкой персональных данных
                </label>
                <button id="sendRegister">Зарегистрироваться</button>
            </form>
        </div>
        <small>Есть аккаунт? <a href="login.php">Войти</a></small>
    </div>
</section>

<? require_once '../../footer.php' ?>