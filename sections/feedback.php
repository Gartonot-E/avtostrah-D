<?
if(isset($_POST['done']) && !empty($_POST['phone']) && !empty($_POST['email'])){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text  = $_POST['text'];

    $message  = "<h2>Здраствуйте, у меня к вам есть вопрос.</h2>";
    $message .= "<p>Телефон для связи: ".$phone."</p>";
    $message .= $text;
    $message .= "<br><hr> буду ждать вашего ответа!";

    $to = "avtostrahovka161@gmail.com";
    $from = $email;
    $subject = "Автострахование | ВОПРОС";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
    $m = mail($to, $subject, $message, $headers);
    if($m) {
        $messageMail = 'Ваше письмо успешно отправлено';
    } else {
        $messageMail = "Ошибка, отправки письма, попробуйте ещё раз";
    } 
    
}
?>

<section class="form-bg" id="feedback">
    <div class="container">
        <h5>// Узнай стоимость страхования</h5>
        <h4>Обратная связь</h4>
        <div class="form_send">
            <form method="POST">
                <?
                if(isset($messageMail)) {
                    ?>
                    <p class="success-message visible" style="display: block">
                        <?=$messageMail;?>
                    </p>
                    <?
                }
                ?>
                <label for="phone">
                    <input type="text" name="phone" placeholder="Телефон" id="phone" required>
                </label>
                <label for="email">
                    <input type="email" name="email" placeholder="E-mail" id="email" required>
                </label>
                <textarea name="text" name="text" cols="30" rows="4" placeholder="Опишите суть вопроса" required></textarea>
                <button type="submit" name="done">Получить ответ</button>
            </form>
        </div>
    </div>
</section>