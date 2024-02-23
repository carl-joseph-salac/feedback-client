<script>
    const startBtn = document.getElementById("start");
    const checkbox = document.getElementById("customCheck");

    checkbox.addEventListener("change", function() {
        if (this.checked) {
            startBtn.removeAttribute("disabled");
        } else {
            startBtn.setAttribute("disabled", "disabled");
        }
    });

    //function to handle enabling/disabling the button based on checkbox state
    function handleButtonState() {
        const startBtn = document.getElementById("start");
        const checkbox = document.getElementById("customCheck");

        // Check if the checkbox was previously checked (based on session data)
        const checkboxChecked = "{{ session('customCheck') }}" == '1'; // Convert session data to boolean

        // Enable or disable the button based on checkbox state
        if (checkboxChecked) {
            startBtn.removeAttribute("disabled");
        } else {
            startBtn.setAttribute("disabled", "disabled");
        }
    }

    // Enable start button if customCheck session variable is not empty on window load.
    window.onload = function() {
        var customCheck = "{{ session('customCheck', '') }}";
        if (customCheck !== '') {
            document.getElementById('start').disabled = false;
        }
    };
</script>
