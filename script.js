jQuery('.carousel').carousel({
    interval: 3000,
    keyboard: false,
    wrap:false
});

jQuery('#exampleModal').modal({
    keyboard: false, //отключаем клавиатуру при запусте модального окна. 
    //ESC не действует exampleModal
    backdrop: 'static' // отключает возможность убрать модальное окно при 
    //нажатии на другую часть экрана, кроме отведенную для этого - крести
});


