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
    $("#phone").mask("+7 (999) 999-99-99");
   
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



