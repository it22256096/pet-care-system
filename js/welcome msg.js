<script>
        // Function to display a welcoming message
        function displayWelcomeMessage() {
            var currentTime = new Date();
            var currentHour = currentTime.getHours();

            var greeting;

            if (currentHour < 12) {
                greeting = "Good morning!";
            } else if (currentHour < 18) {
                greeting = "Good afternoon!";
            } else {
                greeting = "Good evening!";
            }

            var messageElement = document.getElementById("welcomeMessage");
            messageElement.innerHTML = greeting;
        }
    </script>