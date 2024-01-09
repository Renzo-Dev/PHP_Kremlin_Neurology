"use strict";

document.addEventListener('DOMContentLoaded', () => {
    // file1.js
    let isDropDownVisible = false;
    let dropDownElem = document.getElementById('AnnualConferences');
    dropDownElem.addEventListener('mouseenter', showDropDownMenu);
    dropDownElem.addEventListener('mouseout', hideDropDownMenu)

    function showDropDownMenu() {
        // Show dropdown menu and set its position
        // Показать выпадающее меню и установить его позицию
        let dropdownContent = document.getElementById('dropdown-content');
        dropdownContent.style.display = 'inline';
        dropdownContent.style.left = dropDownElem.getBoundingClientRect().left + (dropDownElem.getBoundingClientRect().width - dropdownContent.getBoundingClientRect().width) / 2 + 'px';
        dropdownContent.style.top = dropDownElem.getBoundingClientRect().top + 47 + 'px';
        // Add event listeners for mouseenter and mouseleave to dropdown-content links
        // Добавить обработчики событий для mouseenter и mouseleave для ссылок в dropdown-content
        dropdownContent.querySelectorAll('a').forEach(elem => {
            elem.addEventListener('mouseenter', () => {
                isDropDownVisible = true;
            });
            elem.addEventListener('mouseleave', () => {
                isDropDownVisible = false;
                hideDropDownMenu();
            });
        });
    }
    function hideDropDownMenu() {
        // Hide dropdown menu after a delay if test is false
        // Скрыть выпадающее меню после задержки, если test равен false
        let dropdownContent = document.getElementById('dropdown-content');
        setTimeout(() => {
            if (isDropDownVisible === false) {
                dropdownContent.style.display = 'none';
            }
        }, 200)
    }
});
