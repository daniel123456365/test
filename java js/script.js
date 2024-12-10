document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid', 'timeGrid'],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        select: function(arg) {
            var title = prompt('Event Title:');
            if (title) {
                calendar.addEvent({
                    title: title,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                });
            }
            calendar.unselect();
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            // your events here
            {
                title: 'Appointment 1',
                start: '2024-02-17T10:00:00',
                end: '2024-02-17T11:00:00'
            },
            {
                title: 'Appointment 2',
                start: '2024-02-18T14:00:00',
                end: '2024-02-18T15:00:00'
            }
        ]
    });

    calendar.render();
});