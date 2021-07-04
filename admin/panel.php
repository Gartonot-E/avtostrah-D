<?php require_once '../inc/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Base -->
    <title>Авто Страхование</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">

    <!-- Admin Style -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<header>
    <div class="pre-hero">
        <div class="container">
            <div class="pre-hero__mail">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.418 0.571426H1.58203C0.707941 0.571426 0 1.29507 0 2.17857V11.8214C0 12.7102 0.713145 13.4286 1.58203 13.4286H16.418C17.2847 13.4286 18 12.7132 18 11.8214V2.17857C18 1.29664 17.2949 0.571426 16.418 0.571426ZM16.1964 1.64285C15.8732 1.96946 10.3107 7.59046 10.1187 7.78453C9.81984 8.0881 9.42258 8.25525 9 8.25525C8.57742 8.25525 8.18016 8.08807 7.88034 7.78353C7.75118 7.653 2.25011 2.09407 1.80359 1.64285H16.1964ZM1.05469 11.6034V2.39732L5.61227 7.00285L1.05469 11.6034ZM1.80425 12.3571L6.36005 7.75846L7.13556 8.54214C7.63358 9.04807 8.29571 9.32668 9 9.32668C9.70429 9.32668 10.3664 9.04807 10.8635 8.54314L11.64 7.75846L16.1957 12.3571H1.80425ZM16.9453 11.6034L12.3877 7.00285L16.9453 2.39732V11.6034Z" fill="white"/>
                </svg>
                <a href="mailto:admin@mail.ru">admin@mail.ru</a>
            </div>
            <div class="pre-hero__login">
                <a href="logout.php">Выйти</a>
            </div>
        </div>
    </div>
    <div class="top-header">
        <div class="container">
            <div class="top-header__logo">
                <a href="/">
                    <svg width="241" height="49" viewBox="0 0 241 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.224 38L16.884 31.196H7.2L4.896 38H0L9.432 12.188H14.688L24.12 38H19.224ZM13.464 20.612C13.368 20.276 13.224 19.82 13.032 19.244C12.84 18.668 12.648 18.08 12.456 17.48C12.288 16.856 12.156 16.34 12.06 15.932C11.94 16.412 11.784 16.964 11.592 17.588C11.424 18.212 11.256 18.8 11.088 19.352C10.92 19.904 10.8 20.324 10.728 20.612L8.46 27.236H15.696L13.464 20.612Z" fill="#C84343"/>
                        <path d="M25.704 18.288C23.6133 18.288 21.992 19.0347 20.84 20.528C19.7093 22.0213 19.144 24.048 19.144 26.608C19.144 29.1893 19.6773 31.216 20.744 32.688C21.8107 34.1387 23.4533 34.864 25.672 34.864C26.632 34.864 27.5707 34.768 28.488 34.576C29.4053 34.3627 30.3653 34.0853 31.368 33.744V37.232C30.4293 37.616 29.48 37.8933 28.52 38.064C27.5813 38.2347 26.4933 38.32 25.256 38.32C22.9093 38.32 20.968 37.84 19.432 36.88C17.896 35.8987 16.7547 34.5333 16.008 32.784C15.2613 31.0133 14.888 28.944 14.888 26.576C14.888 24.272 15.304 22.2453 16.136 20.496C16.968 18.7253 18.184 17.3387 19.784 16.336C21.4053 15.3333 23.3787 14.832 25.704 14.832C26.856 14.832 27.9867 14.9707 29.096 15.248C30.2267 15.504 31.2827 15.8667 32.264 16.336L30.856 19.696C30.0453 19.3333 29.2027 19.0133 28.328 18.736C27.4747 18.4373 26.6 18.288 25.704 18.288ZM50.8165 23.76H45.1205V38H41.1205V23.76H35.4565V20.656H50.8165V23.76ZM64.6858 20.336C66.7124 20.336 68.3444 21.0933 69.5818 22.608C70.8191 24.1013 71.4378 26.3307 71.4378 29.296C71.4378 32.2613 70.7978 34.512 69.5178 36.048C68.2591 37.5627 66.6164 38.32 64.5898 38.32C63.3098 38.32 62.2751 38.0853 61.4858 37.616C60.6964 37.1467 60.0671 36.6027 59.5978 35.984H59.3418C59.4058 36.3893 59.4591 36.8373 59.5018 37.328C59.5658 37.7973 59.5978 38.2347 59.5978 38.64V45.68H55.5658V20.656H58.8298L59.4058 22.96H59.5978C60.0671 22.2347 60.7071 21.616 61.5178 21.104C62.3284 20.592 63.3844 20.336 64.6858 20.336ZM63.5338 23.6C62.1044 23.6 61.0911 24.0267 60.4938 24.88C59.9178 25.7333 59.6191 27.024 59.5978 28.752V29.264C59.5978 31.12 59.8751 32.5493 60.4298 33.552C61.0058 34.5333 62.0618 35.024 63.5978 35.024C64.8564 35.024 65.7844 34.512 66.3818 33.488C67.0004 32.4427 67.3098 31.024 67.3098 29.232C67.3098 27.44 67.0004 26.0533 66.3818 25.072C65.7844 24.0907 64.8351 23.6 63.5338 23.6ZM83.949 20.336C86.189 20.336 87.885 20.8267 89.037 21.808C90.2103 22.7893 90.797 24.304 90.797 26.352V38H87.949L87.149 35.6H87.021C86.2743 36.5387 85.485 37.232 84.653 37.68C83.821 38.1067 82.6903 38.32 81.261 38.32C79.7037 38.32 78.413 37.8827 77.389 37.008C76.365 36.1333 75.853 34.7787 75.853 32.944C75.853 31.152 76.5037 29.808 77.805 28.912C79.1277 28.016 81.1223 27.5147 83.789 27.408L86.797 27.312V26.448C86.797 25.36 86.5303 24.5813 85.997 24.112C85.4637 23.6213 84.717 23.376 83.757 23.376C82.8823 23.376 82.0397 23.504 81.229 23.76C80.4397 24.016 79.6503 24.3147 78.861 24.656L77.581 21.84C78.4343 21.392 79.405 21.0293 80.493 20.752C81.6023 20.4747 82.7543 20.336 83.949 20.336ZM84.685 29.872C82.9143 29.936 81.6877 30.2453 81.005 30.8C80.3223 31.3333 79.981 32.0587 79.981 32.976C79.981 33.808 80.2157 34.4053 80.685 34.768C81.1757 35.1093 81.8157 35.28 82.605 35.28C83.7783 35.28 84.7703 34.9493 85.581 34.288C86.3917 33.6053 86.797 32.6027 86.797 31.28V29.808L84.685 29.872ZM101.034 29.136L95.3055 20.656H99.8815L103.658 26.544L107.434 20.656H112.01L106.218 29.136L112.298 38H107.722L103.658 31.696L99.5935 38H95.0175L101.034 29.136ZM131.499 29.296C131.499 32.176 130.752 34.4053 129.259 35.984C127.765 37.5413 125.739 38.32 123.179 38.32C121.6 38.32 120.192 37.968 118.955 37.264C117.717 36.56 116.747 35.536 116.043 34.192C115.339 32.848 114.987 31.216 114.987 29.296C114.987 26.416 115.723 24.208 117.195 22.672C118.688 21.1147 120.715 20.336 123.275 20.336C124.875 20.336 126.293 20.688 127.531 21.392C128.768 22.0747 129.739 23.088 130.443 24.432C131.147 25.7547 131.499 27.376 131.499 29.296ZM119.115 29.296C119.115 31.1307 119.435 32.5493 120.075 33.552C120.736 34.5547 121.792 35.056 123.243 35.056C124.693 35.056 125.739 34.5547 126.379 33.552C127.04 32.5493 127.371 31.1307 127.371 29.296C127.371 27.4613 127.04 26.0533 126.379 25.072C125.739 24.0907 124.683 23.6 123.211 23.6C121.781 23.6 120.736 24.0907 120.075 25.072C119.435 26.0533 119.115 27.4613 119.115 29.296ZM151.955 25.136C151.955 26.1173 151.646 26.928 151.027 27.568C150.43 28.208 149.576 28.624 148.467 28.816V28.944C149.64 29.0933 150.6 29.4987 151.347 30.16C152.115 30.8213 152.499 31.7173 152.499 32.848C152.499 34.3413 151.923 35.5787 150.771 36.56C149.619 37.52 147.72 38 145.075 38H137.107V20.656H145.043C146.366 20.656 147.539 20.7947 148.563 21.072C149.608 21.3493 150.43 21.8187 151.027 22.48C151.646 23.12 151.955 24.0053 151.955 25.136ZM147.859 25.488C147.859 24.2507 146.867 23.632 144.883 23.632H141.139V27.536H144.339C146.686 27.536 147.859 26.8533 147.859 25.488ZM148.307 32.688C148.307 31.8987 147.998 31.3333 147.379 30.992C146.76 30.6293 145.854 30.448 144.659 30.448H141.139V35.088H144.755C145.843 35.088 146.707 34.9067 147.347 34.544C147.987 34.1813 148.307 33.5627 148.307 32.688ZM164.959 20.336C167.199 20.336 168.895 20.8267 170.047 21.808C171.22 22.7893 171.807 24.304 171.807 26.352V38H168.959L168.159 35.6H168.031C167.284 36.5387 166.495 37.232 165.663 37.68C164.831 38.1067 163.7 38.32 162.271 38.32C160.714 38.32 159.423 37.8827 158.399 37.008C157.375 36.1333 156.863 34.7787 156.863 32.944C156.863 31.152 157.514 29.808 158.815 28.912C160.138 28.016 162.132 27.5147 164.799 27.408L167.807 27.312V26.448C167.807 25.36 167.54 24.5813 167.007 24.112C166.474 23.6213 165.727 23.376 164.767 23.376C163.892 23.376 163.05 23.504 162.239 23.76C161.45 24.016 160.66 24.3147 159.871 24.656L158.591 21.84C159.444 21.392 160.415 21.0293 161.503 20.752C162.612 20.4747 163.764 20.336 164.959 20.336ZM165.695 29.872C163.924 29.936 162.698 30.2453 162.015 30.8C161.332 31.3333 160.991 32.0587 160.991 32.976C160.991 33.808 161.226 34.4053 161.695 34.768C162.186 35.1093 162.826 35.28 163.615 35.28C164.788 35.28 165.78 34.9493 166.591 34.288C167.402 33.6053 167.807 32.6027 167.807 31.28V29.808L165.695 29.872ZM182.332 20.656V27.536H189.98V20.656H194.012V38H189.98V30.64H182.332V38H178.3V20.656H182.332ZM204.518 28.912C204.518 29.296 204.496 29.8293 204.454 30.512C204.411 31.1733 204.368 31.8133 204.326 32.432C204.283 33.0293 204.251 33.456 204.23 33.712L212.71 20.656H217.574V38H213.702V29.84C213.702 29.3707 213.712 28.816 213.734 28.176C213.776 27.5147 213.819 26.896 213.862 26.32C213.904 25.7227 213.936 25.2747 213.958 24.976L205.51 38H200.646V20.656H204.518V28.912ZM231.187 20.336C233.512 20.336 235.347 21.0293 236.691 22.416C238.056 23.8027 238.739 25.7333 238.739 28.208V30.256H227.283C227.325 31.8347 227.763 33.0613 228.595 33.936C229.427 34.7893 230.579 35.216 232.051 35.216C233.16 35.216 234.163 35.1093 235.059 34.896C235.955 34.6613 236.872 34.3307 237.811 33.904V37.136C236.957 37.5413 236.072 37.84 235.155 38.032C234.237 38.224 233.139 38.32 231.859 38.32C230.173 38.32 228.669 38 227.347 37.36C226.045 36.6987 225.021 35.7067 224.275 34.384C223.549 33.0613 223.187 31.4187 223.187 29.456C223.187 26.4907 223.923 24.2293 225.395 22.672C226.867 21.1147 228.797 20.336 231.187 20.336ZM231.187 23.312C230.099 23.312 229.213 23.664 228.531 24.368C227.869 25.0507 227.485 26.0747 227.379 27.44H234.835C234.813 26.2453 234.504 25.264 233.907 24.496C233.331 23.7067 232.424 23.312 231.187 23.312Z" fill="#12BEC8"/>
                    </svg>    
                </a>
            </div>
        </div>
    </div>
</header>    


<div class="container deactive">
    <h2>Редактирование секций</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#editOfferSection" aria-expanded="false" aria-controls="flush-collapseOne">
                    Редактировании "Оффера"
                </button>
            </h2>
            <div id="editOfferSection" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <? $post = $db->query("SELECT * FROM `offer`")->fetch(PDO::FETCH_ASSOC); ?>
                    
                    <?
                    if(isset($_POST['titleOffer']) && !empty($_POST['titleOffer']) && isset($_POST['doneOffer'])){
                        $title = $_POST['titleOffer'];
                        $restitleOffer = $db->query("UPDATE `offer` SET `title` = '".$title."' WHERE `offer`.`id` = 1"); 
                        if($restitleOffer) echo "<div class='success-message visible' style='display: block'>Изменения заголовка сохранены! Проверьте <b><a href='/' target='_blank'>страницу</a></b> </div>'";
                    }

                    if(isset($_POST['contentOffer']) && !empty($_POST['contentOffer']) && isset($_POST['doneOffer'])){
                        $content = $_POST['contentOffer'];
                        $rescontentOffer = $db->query("UPDATE `offer` SET `content` = '".$content."' WHERE `offer`.`id` = 1"); 
                        if($rescontentOffer) echo "<div class='success-message visible' style='display: block'>Изменения контента сохранены! Проверьте <b><a href='/' target='_blank'>страницу</a></b> </div>'";
                    }    
                    ?>

                    <form method="POST">
                        <label>
                            <span>Изменить заголовок</span>
                            <input type="text" value="<?=$post['title']?>" name="titleOffer">
                        </label>
                        <label>
                            <span>Изменить текст</span>
                            <textarea cols="30" rows="10" name="contentOffer"><?=$post['content']?></textarea>
                        </label>
                        <input type="submit" name="doneOffer" value="Сохранить изменения">
                    </form>  
                </div>
            </div>
        </div>
    
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#editAboutSection" aria-expanded="false" aria-controls="flush-collapseOne">
                    Редактировании секции "наши цели"
                </button>
            </h2>
            <div id="editAboutSection" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <? $post = $db->query("SELECT * FROM `about`")->fetch(PDO::FETCH_ASSOC); ?>
                    
                    <?
                    if(isset($_POST['titleAbout']) && !empty($_POST['titleAbout']) && isset($_POST['doneAbout'])){
                        $title = $_POST['titleAbout'];
                        $resTitleAbout = $db->query("UPDATE `about` SET `title` = '".$title."' WHERE `about`.`id` = 1"); 
                        if($resTitleAbout) echo "<div class='success-message visible' style='display: block'>Изменения заголовка сохранены! Проверьте <b><a href='/#about' target='_blank'>страницу</a></b> </div>'";
                    }

                    if(isset($_POST['contentAbout']) && !empty($_POST['contentAbout']) && isset($_POST['doneAbout'])){
                        $content = $_POST['contentAbout'];
                        $resContentAbout = $db->query("UPDATE `about` SET `content` = '".$content."' WHERE `about`.`id` = 1"); 
                        if($resContentAbout) echo "<div class='success-message visible' style='display: block'>Изменения контента сохранены! Проверьте <b><a href='/#about' target='_blank'>страницу</a></b> </div>'";
                    }    
                    ?>

                    <form method="POST">
                        <label>
                            <span>Изменить заголовок</span>
                            <input type="text" value="<?=$post['title']?>" name="titleAbout">
                        </label>
                        <label>
                            <span>Изменить текст</span>
                            <textarea name="contentAbout" cols="30" rows="10"><?=$post['content']?></textarea>
                        </label>
                        <input type="submit" name="doneAbout" value="Сохранить изменения">
                    </form>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#editExpertsSection" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Редактировании секции "Эксперты"
                </button>
            </h2>
            <div id="editExpertsSection" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">



                <?
                // Обновление данных для первого сотрудника
                 if(isset($_POST['positionExperts1']) && !empty($_POST['positionExperts1']) && isset($_POST['doneExperts'])){
                    // Для удобства сохраним значение в переменные
                    $positionExperts1 = $_POST['positionExperts1'];
                    $nameExperts1 = $_POST['nameExperts1'];
                    $expirienceExperts1 = $_POST['expirienceExperts1'];

                    // Выполнить запрос на обновление данных в БД
                    $respositionExperts1 = $db->query("UPDATE `experts` SET `position` = '".$positionExperts1."' WHERE `experts`.`id` = 1"); 
                    $resnameExperts1 = $db->query("UPDATE `experts` SET `name` = '".$nameExperts1."' WHERE `experts`.`id` = 1"); 
                    $resexpirienceExperts1 = $db->query("UPDATE `experts` SET `expirience` = '".$expirienceExperts1."' WHERE `experts`.`id` = 1"); 
                    
                    // В случае успеха и обновления данных в бд, уведомить    
                    if($resexpirienceExperts1) echo "<div class='success-message visible' style='display: block'>Изменения для первого сотрудника сохранены! Проверьте <b><a href='/#experts' target='_blank'>страницу</a></b> </div>'";
                
                    // Сохраняем фото и обновляем в базе данных
                    $path = "../img/";
                    $fileName = md5($_FILES['image1']['name']).".png";
                    if (@copy($_FILES['image1']['tmp_name'], $path.$fileName)){
                        $db->query("UPDATE `experts` SET `img` = '".$fileName."' WHERE `experts`.`id` = 1"); 
                    }
                }

                // Обновление данных для второго сотрудника
                if(isset($_POST['positionExperts2']) && !empty($_POST['positionExperts2']) && isset($_POST['doneExperts'])){
                    $positionExperts2 = $_POST['positionExperts2'];
                    $nameExperts2 = $_POST['nameExperts2'];
                    $expirienceExperts2 = $_POST['expirienceExperts2'];

                    $respositionExperts2 = $db->query("UPDATE `experts` SET `position` = '".$positionExperts2."' WHERE `experts`.`id` = 2"); 
                    $resnameExperts2 = $db->query("UPDATE `experts` SET `name` = '".$nameExperts2."' WHERE `experts`.`id` = 2"); 
                    $resexpirienceExperts2 = $db->query("UPDATE `experts` SET `expirience` = '".$expirienceExperts2."' WHERE `experts`.`id` = 2"); 
                    
                    if($resexpirienceExperts2) echo "<div class='success-message visible' style='display: block'>Изменения для второго сотрудника сохранены! Проверьте <b><a href='/#experts' target='_blank'>страницу</a></b> </div>'";
                    
                    // Сохраняем фото и обновляем в базе данных
                    $path = "../img/";
                    $fileName = md5($_FILES['image2']['name']).".png";
                    if (@copy($_FILES['image2']['tmp_name'], $path.$fileName)){
                        $db->query("UPDATE `experts` SET `img` = '".$fileName."' WHERE `experts`.`id` = 2"); 
                    }
                }

                // Обновление данных для третьего сотрудника
                if(isset($_POST['positionExperts3']) && !empty($_POST['positionExperts3']) && isset($_POST['doneExperts'])){
                    $positionExperts3 = $_POST['positionExperts3'];
                    $nameExperts3 = $_POST['nameExperts3'];
                    $expirienceExperts3 = $_POST['expirienceExperts3'];

                    $respositionExperts3 = $db->query("UPDATE `experts` SET `position` = '".$positionExperts3."' WHERE `experts`.`id` = 3"); 
                    $resnameExperts3 = $db->query("UPDATE `experts` SET `name` = '".$nameExperts3."' WHERE `experts`.`id` = 3"); 
                    $resexpirienceExperts3 = $db->query("UPDATE `experts` SET `expirience` = '".$expirienceExperts3."' WHERE `experts`.`id` = 3"); 

                    if($resexpirienceExperts3) echo "<div class='success-message visible' style='display: block'>Изменения для третьего сотрудника сохранены! Проверьте <b><a href='/#experts' target='_blank'>страницу</a></b> </div>'";
                
                    // Сохраняем фото и обновляем в базе данных
                    $path = "../img/";
                    $fileName = md5($_FILES['image3']['name']).".png";
                    if (@copy($_FILES['image3']['tmp_name'], $path.$fileName)){
                        $db->query("UPDATE `experts` SET `img` = '".$fileName."' WHERE `experts`.`id` = 3"); 
                    }
                }
                
                ?>


                <form method="POST" enctype="multipart/form-data">
                    <div class="experts-line">
                    <?
                        $posts = $db->query("SELECT * FROM `experts`");

                        foreach ($posts as $post){
                        ?>
                            <div class="experts-block">
                                <img src="/img/<?=$post['img']?>">
                                
                                <label>
                                    <span>Выберите изображение</span>
                                    <input type="file" name="image<?=$post['id']?>">
                                </label>

                                <label>
                                    <span>Изменить должность</span>
                                    <input type="text" value="<?=$post['position']?>" name="positionExperts<?=$post['id']?>">
                                </label>
                                <label>
                                    <span>Изменить имя</span>
                                    <input type="text" value="<?=$post['name']?>" name="nameExperts<?=$post['id']?>">
                                </label>
                                <label>
                                    <span>Изменить стаж работы</span>
                                    <input type="number" value="<?=$post['expirience']?>" name="expirienceExperts<?=$post['id']?>">
                                </label>
                            </div>
                        <?        
                        }
                    ?>
                    </div>
                    <input type="submit" name="doneExperts" value="Сохранить изменения">
                </form>
                
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#editContactsSection" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Редактировании секции "Контакты"
                </button>
            </h2>
            <div id="editContactsSection" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <? $post = $db->query("SELECT * FROM `contacts`")->fetch(PDO::FETCH_ASSOC); ?>
                    
                    <?
                    // Редактирование адреса
                    if(isset($_POST['addresContacts']) && !empty($_POST['addresContacts']) && isset($_POST['doneContacts'])){
                        $adress = $_POST['addresContacts'];
                        $resaddresContacts = $db->query("UPDATE `contacts` SET `adress` = '".$adress."' WHERE `contacts`.`id` = 1"); 
                        if($resaddresContacts) echo "<div class='success-message visible' style='display: block'>Изменения адреса сохранены! Проверьте <b><a href='/#contacts' target='_blank'>страницу</a></b> </div>'";
                    }

                    // Редактирование телефона
                    if(isset($_POST['phoneContacts']) && !empty($_POST['phoneContacts']) && isset($_POST['doneContacts'])){
                        $phone = $_POST['phoneContacts'];
                        $resphoneContacts = $db->query("UPDATE `contacts` SET `phone` = '".$phone."' WHERE `contacts`.`id` = 1"); 
                        if($resphoneContacts) echo "<div class='success-message visible' style='display: block'>Изменения телефона сохранены! Проверьте <b><a href='/#contacts' target='_blank'>страницу</a></b> </div>'";
                    }

                    // Редактирование почты
                    if(isset($_POST['emailContacts']) && !empty($_POST['emailContacts']) && isset($_POST['doneContacts'])){
                        $email = $_POST['emailContacts'];
                        $resemailContacts = $db->query("UPDATE `contacts` SET `email` = '".$email."' WHERE `contacts`.`id` = 1"); 
                        if($resemailContacts) echo "<div class='success-message visible' style='display: block'>Изменения почты сохранены! Проверьте <b><a href='/#contacts' target='_blank'>страницу</a></b> </div>'";
                    }
                        
                    ?>

                    <form method="POST">
                        <label>
                            <span>Изменить адрес</span>
                            <input type="text" value="<?=$post['adress']?>" name="addresContacts">
                        </label>
                        <label>
                            <span>Изменить телефон</span>
                            <input type="text" id="phone" value="<?=$post['phone']?>" name="phoneContacts">
                        </label>
                        <label>
                            <span>Изменить почту</span>
                            <input type="email" value="<?=$post['email']?>" name="emailContacts">
                        </label>
                        <input type="submit" name="doneContacts" value="Сохранить изменения">
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>
