<hr>
<p class="raleway-cover-bold-h2" align="center">JADWAL</p>
<hr>
<div class="row">
    <div id="calendar"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
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