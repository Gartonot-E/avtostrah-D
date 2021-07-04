<section id="about">
    <div class="goal-bg">
        <div class="container">
            <div class="aside-right">
                <? $post = $db->query("SELECT * FROM `about`")->fetch(PDO::FETCH_ASSOC); ?>
                <h3><?=$post['title']?></h3>
                <div><?=$post['content']?></div>
            </div>
        </div>
    </div>
</section>