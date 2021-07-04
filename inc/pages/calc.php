<? 
// Шапка
require_once '../../header.php'; 

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<section class="register main-section calc <?=$_GET['dea'];?>">
    <div class="container">
    <?
    // Выводим сообщение, если всё отправилось
    if(isset($_GET['msgSuc'])){
        echo "<p class='success-message visible' style='display: block;'>".@array_shift($_GET)."</p>";
    }
    // Выводим сообщение, если возникла какая-то ошибка и письмо не отправилось
    if(isset($_GET['msgErr'])){
        echo "<p class='error-message visible' style='display: block;'>".@array_shift($_GET)."</p>";
    }
    ?>
        <h2>Расчёт стоимости страхования</h2>
        <small>
                 Будьте предельно внимательны и не торопитесь. Тщательно проверяйте соответствие вносимых 
                 Вами данных с данными, указанными в документах (паспорт, водительское удостоверение, ПТС, 
                 СТС, диагностическая карта).
        </small>
        <div class="form_send">
            <form action="../handler.php" method="POST">
            <fieldset>
                <legend>Общие данные</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Дата начала страхования</label>
                            <input class="form-control" type="date" value="<?=date('Y-m-d');?>" name="data" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Контактный телефон</label>
                            <input class="form-control" type="text" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" required>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Транспортное средство</legend>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Марка ТС</label>
                            <input class="form-control" id="mark" type="text" name="mark" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Модель ТС</label>
                            <input class="form-control"id="model" type="text" name="model" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Мощность, л.с.</label>
                            <input class="form-control" id="mosh" type="text" name="mosh" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Год выпуска</label>
                            <input class="form-control" id="year" type="date" name="year" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <legend>Документ на автомобиль</legend>
                            <div class="form-group">
                                <label>Укажите ПТС или СТС</label>
                                <input class="form-control" name="ptssts" type="text" required>
                            </div>
                            <div class="form-group">
                                <label>Серия</label>
                                <input class="form-control" name="seria" type="number" required>
                            </div>
                            <div class="form-group">
                                <label>Номер</label>
                                <input class="form-control" name="number" type="number" required>
                            </div>
                            <div class="form-group">
                                <label>Дата выдачи</label>
                                <input class="form-control" name="dateVidachi" type="date" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <legend>Диагностическая карта (Техосмотр)</legend>
                            <div class="form-group">
                                <label>Номер диагностической кaрты</label>
                                <input type="number" class="form-control" id="numberCard" name="numberCard"  required>
                            </div>
                            <div class="form-group">
                                <label>Срок действия до</label>
                                <input type="date" class="form-control" id="srok" name="srok" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    Нет диагностической карты
                                    <input type="checkbox" id="diagCard">
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </fieldset>
                    <div class="col-md-12">
                        <fieldset>
                            <legend>Собственник</legend>
                            <div class="form-group">
                                <label>ФИО</label>
                                <input class="form-control" type="text" name="nameSobsvennik" required>
                            </div>
                            <div class="form-group">
                                <label>Ваш адрес</label>
                                <input class="form-control" type="text" name="yourAddres" required>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                    <fieldset>
                            <legend>Срок страхования</legend>
                            <div class="form-group">
                                <div class="radio dop_checkbox">
                                    <label>
                                        <input class="change_radio_eosago" name="srokStrah" value="3" type="radio" checked="">
                                        <div class="radio__text">3 месяца</div>
                                    </label>
                                    <label>
                                        <input class="change_radio_eosago" name="srokStrah" value="6" type="radio">
                                        <div class="radio__text">6 месяцев</div>
                                    </label>
                                    <label>
                                        <input class="change_radio_eosago" name="srokStrah" value="12" type="radio">
                                        <div class="radio__text">12 месяцев</div>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <button type="submit">Рассчитать</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?

// Подвал
require_once '../../footer.php'; ?>