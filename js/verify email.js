<script>
        function validateEmail() {
            var emailInput = document.getElementById("email").value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(emailInput)) {
                alert("Invalid email format! Please enter a valid email address.");
                return false;
            }

            return true;
        }
 </script>