<head>
    {literal}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'
                });
                calendar.render();
            });
        </script>
    {/literal}

</head>

<body>
    <div id='calendar'></div>
</body>