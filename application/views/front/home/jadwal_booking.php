<hr>
<p class="raleway-cover-bold-h2" align="center">JADWAL</p>
<hr>
<div class="row ">
    <div id="calendar" class="calendar"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridFourDay',
            views:{
                timeGridFourDay:{
                    type: 'timeGrid',
                    duration: { days: 4 },
                    allDaySlot: false,
                    slotMinTime: '06:00:00',
                    slotMaxTime: '22:00:00',
                    eventMinHeight: 30,
                    handleWindowResize: true,
                }
            },
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: '<?php echo site_url("jadwal/get_events"); ?>'
        });

        calendar.render();
    });
</script>