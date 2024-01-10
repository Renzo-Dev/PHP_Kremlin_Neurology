'use strict'
document.addEventListener('DOMContentLoaded', () => {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        navigation: {
            nextEl: ".bRight",
            prevEl: ".bLeft",
            hiddenClass: 'test',
        },
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
            2000: {
                slidesPerView: 8,
                spaceBetween: 50,
            },
        },
        on: {
            // при каждом изменении слайда (событие slideChange), проверяется, находится ли слайдер в конце или в начале
            slideChange: function () {
                // Обработчик события при изменении слайда
                var nextButton = document.querySelector('.bRight');
                if (swiper.isEnd) {
                    nextButton.style.visibility = 'hidden'; // Скрыть кнопку next
                } else {
                    nextButton.style.visibility = 'visible'; // Показать кнопку next
                }
                var prevButton = document.querySelector('.bLeft');
                if (swiper.isBeginning) {
                    prevButton.style.visibility = 'hidden'; // Скрыть кнопку next
                } else {
                    prevButton.style.visibility = 'visible'; // Показать кнопку next
                }
            },
        },
    });
});