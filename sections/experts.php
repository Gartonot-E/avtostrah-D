<section class="experts" id="experts">
    <div class="container">
        <h3>Помогут в страховании</h3>
        <h2>Наши эксперты</h2>
        
        <div class="experts-line">
            <? 
                $posts = $db->query("SELECT * FROM `experts`");
                
                foreach ($posts as $post) {
                    ?>
                    <div class="experts-block">  
                        <img src="img/<?=$post['img']?>">
                        <p class="title"><?=$post['position']?></p>
                        <p class="name"><?=$post['name']?></p>
                        <p class="exp">стаж работы: <span> <?=$post['expirience']?> лет</span></p>
                    </div>
                    <?
                }
            ?>
        </div>
    </div>
</section>