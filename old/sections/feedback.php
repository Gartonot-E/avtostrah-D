<?
if(isset($_POST['done']) && !empty($_POST['name']) && !empty($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $message = "<h2>Здраствуйте, меня зовут ".$name;
    $message .= ", мне необходим арт.</h2>";
    $message .= "<p>Мои предпочтения: $text.</p>";
    $message .= $image;
    $message .= "<br><hr> буду ждать вашего ответа!";

    $to = "avtostrahovka161@gmail.com";
    $from = $email;
    $subject = "Заказ на АРТ";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
    $m = mail($to, $subject, $message, $headers);
    if($m) echo 'Ваше письмо успешно отправлено'; else echo "Ошибка, отправки письма, попробуйте ещё раз";
}

?>


<section class="form-bg" id="feedback">
    <div class="container">
        <h5>// Узнай стоимость страхования</h5>
        <h4>Обратная связь</h4>
        <div class="form_send">
            <form>
                <p class="error-message"></p>
                <input type="text" placeholder="Телефон" id="feedbackPhone">
                <input type="email" placeholder="E-mail" id="feedbackMail">
                <textarea name="text" cols="30" rows="10" placeholder="Опишите суть вопроса"></textarea>
                <button id="sendFeedback">Получить ответ</button>
            </form>
        </div>
    </div>
</section>
