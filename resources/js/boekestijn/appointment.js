export default class Appointment {
    constructor() {
        this.appointmentDate();
    }

    appointmentDate() {
        if (document.querySelector('.appointment')) {
            console.log(' ansu')
            const numWeeks = 1;
            const now = new Date();
            now.setDate(now.getDate() + numWeeks * 7);
            var picker = new Pikaday({
                disableDayFn: function (date) {
                    // Disable Sunday and Saturday
                    return date.getDay() === 0 || date.getDay() === 6;
                },
                field: document.getElementById('fecha'),
                // Set min date to 1 week from now
                minDate: now

            });
        }
    }
}
