window.addEventListener('load', () => {

    page = window.location.href.split('/')

    // Для Бургер меню
    const ulList = document.querySelector('.top-header__menu ul');
    document.querySelector('.btn.burger').addEventListener('click', () => {

        if(ulList.style.top == "126px"){
            ulList.style.top = "-1000px";
        } else {
            ulList.style.top = "126px";
        }
    })

    // Маска 
    $("#feedbackPhone").mask("+7 (999) 99-99-999");

    
    // Отправка запросов Обратной связи
    if(page[3] == '' || page[3] == '#feedback' || page[3] == "?#feedback") {
        const sendFB = document.querySelector('#sendFeedback');
        const formFB = document.querySelector('.form_send');

        sendFB.addEventListener('click', (e) => {
            // Отключаем кнопку отправки
            e.preventDefault();

            if($('#feedbackPhone').val() !== "" && $('#feedbackName').val() !== "" && $('#feedbackMail').val() !== ""){
                data = {
                    'phone': $('#feedbackPhone').val(),
                    'name': $('#feedbackName').val(),
                    'mail': $('#feedbackMail').val()
                }

                $.ajax({
                    url: '/inc/functions.php',
                    data: {'dataFeedBack' : data },
                    method: "POST",
                    success: (data) => {
                        formFB.classList.add('send')
                    }
                }); 
            } else {
                $('.error-message').text("Заполните все поля");
                $('.error-message').addClass('visible');
            }
        })
    }
    
    // Регистрация
    if(page[3] == 'inc' && page[5][0] == 'r') {
        const sendReg = document.querySelector('#sendRegister');

        sendReg.addEventListener('click', (e) => {
            // Отключаем кнопку отправки
            e.preventDefault();
            if($('#registerPhone').val() !== "" && $('#registerName').val() !== "" && $('#registerMail').val() !== "" && $('#registerPassword').val() !== ""){
         
            data = {
                'phone': $('#registerPhone').val(),
                'name': $('#registerName').val(),
                'mail': $('#registerMail').val(),
                'password': $('#registerPassword').val()
            }

            $.ajax({
                url: '/inc/functions.php',
                data: {'dataRegister' : data },
                method: "POST",
                success: (data) => {
                    response = JSON.parse(data);
                    if(response.error) {
                        $('.error-message').text(response.error);
                        $('.error-message').addClass('visible');
                        $('.success-message').removeClass('visible');
                        $('.success-message').text('');
                    } else {
                        $('.success-message').text(response.ok);
                        $('.success-message').addClass('visible');
                        $('.error-message').removeClass('visible');
                        $('.error-message').text('');
                    }
                }
            }); 

            } else {
                $('.error-message').text("Заполните все поля");
                $('.error-message').addClass('visible');
            }
        })
    }

    // Авторизация
    if(page[3] == 'inc' && page[5][0] == 'l') {
        const sendLog = document.querySelector('#sendLogin');

        sendLog.addEventListener('click', (e) => {
            // Отключаем кнопку отправки
            e.preventDefault();
            if($('#loginMail').val() !== "" && $('#loginPassword').val() !== ""){
            
                data = {
                    'mail': $('#loginMail').val(),
                    'password': $('#loginPassword').val()
                }
                $.ajax({
                    url: '/inc/functions.php',
                    data: {'dataLogin' : data },
                    method: "POST",
                    success: (data) => {
                        response = JSON.parse(data);
                        if(response.error) {
                            $('.error-message').text(response.error);
                        } else {
                            window.location.href = "/inc/pages/calc.php";
                        }
                    }
                }); 
            } else {
                $('.error-message').text("Заполните все поля");
                $('.error-message').addClass('visible');
            }
        });
    }
    // Расчёт стоимости страхования
    if(page[3] == 'inc' && page[5][0] == 'c') {
        // Отключение диагностической карты
        const LabelRadio = document.querySelector('#diagCard');
        LabelRadio.addEventListener('click', (e) => {
            // console.log();
            if(LabelRadio.checked) {
                numberCard.value = 'Отсутсвует';
                numberCard.setAttribute('disabled', 'disabled');
                srok.value = 'Отсутсвует';
                srok.setAttribute('disabled', 'disabled');
            } else {
                numberCard.value = '';
                numberCard.removeAttribute('disabled')
                srok.value = '';
                srok.removeAttribute('disabled');
            }
        });

        
    }
});

