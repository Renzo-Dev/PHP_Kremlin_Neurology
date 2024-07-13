document.addEventListener('DOMContentLoaded', () => {
    let holidays = {
        May_9: {
            day: "9", month: "6", imagePath: "frontend/images/GeorgeLine.svg", alt: "Георгиевская лента"
        },
        NewYear: {
            day: "31", month: '12', imagePath: "", alt: ""
        },
    }


    function checkHolidays() {
        const date = new Date();
        const day = date.getDate().toString();
        const month = (date.getMonth() + 1).toString();
        console.log("current date " + day + ' ' + month)

        for (const holiday in holidays) {
            if (holidays.hasOwnProperty(holiday)) {
                console.log(holidays[holiday].day + ' ' + holidays[holiday].month)
                if ((holidays[holiday].day === day) && (holidays[holiday].month === month)) {
                    let imageHol = document.getElementById('imageEvent');
                    console.log(holidays[holiday].imagePath)

                    imageHol.src = holidays[holiday].imagePath;
                    imageHol.alt = holidays[holiday].alt;
                    imageHol.style.display = 'inline';
                    imageHol.style.visibility = 'visible';
                }
            }
        }
    }

    checkHolidays();
});