<div class="centre-header">
    <div class="container">
        <p class="before-offer">Наша главная цель</p>
        <? $post = $db->query("SELECT * FROM `offer`")->fetch(PDO::FETCH_ASSOC); ?>
        <h1><?=$post['title']?></h1>
        <p class="after-offer"><?=$post['content']?></p>
        <a href="inc/pages/login.php">Оставить заявку сейчас</a>
    </div>
</div>