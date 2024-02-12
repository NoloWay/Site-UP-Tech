document.addEventListener('DOMContentLoaded', function () {
    const daysOfWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

    function displayCurrentWeek() {
        const currentDate = new Date();
        const currentWeek = getWeekDates(currentDate);

        document.getElementById('currentWeek').textContent = `Semaine du ${formatDate(currentWeek[0])} au ${formatDate(currentWeek[4])}`;

        const daysContainer = document.querySelector('.days');
        daysOfWeek.forEach((day, index) => {
            daysContainer.children[index].textContent = day;
        });
    }

    function getWeekDates(date) {
        const startDate = new Date(date);
        startDate.setDate(date.getDate() - date.getDay() + (date.getDay() === 0 ? -6 : 1));

        const weekDates = [];
        for (let i = 0; i < 5; i++) {
            const currentDate = new Date(startDate);
            currentDate.setDate(startDate.getDate() + i);
            weekDates.push(currentDate);
        }

        return weekDates;
    }

    function formatDate(date) {
        const options = { weekday: 'long', day: 'numeric', month: 'numeric', year: 'numeric' };
        return date.toLocaleDateString('fr-FR', options);
    }

    displayCurrentWeek();
});
