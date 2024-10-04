<script>
        function displayTime() {
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();

            // Add leading zeros to minutes and seconds if they are less than 10
            minutes = (minutes < 10 ? "0" : "") + minutes;
            seconds = (seconds < 10 ? "0" : "") + seconds;

            var timeString = hours + ":" + minutes + ":" + seconds;

            document.getElementById("time").innerHTML = timeString;

            setTimeout(displayTime, 1000); // Update the time every second
        }
    </script>