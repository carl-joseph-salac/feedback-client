<script>
    // This code adds a click event listener to each input element, updating a display element with the value of the clicked input.
    let star = document.querySelectorAll('input');
    let showValue = document.querySelector('#rating-value');

    for (let i = 0; i < star.length; i++) {
        star[i].addEventListener('click', function() {
            i = this.value;

            showValue.innerHTML = i;
        });
    }

    // This code disables the Next button initially and enables it when any radio button is checked.
    document.addEventListener('DOMContentLoaded', function() {
        // Select all radio buttons
        const radioButtons = document.querySelectorAll('input[type="radio"]');

        // Select the Next button
        const nextButton = document.getElementById('nextsqd');

        // Disable the Next button initially
        nextButton.disabled = true;

        // Add event listener to each radio button
        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                // Check if any radio button is checked
                const isChecked = Array.from(radioButtons).some(function(radio) {
                    return radio.checked;
                });

                // Enable or disable the Next button based on whether any radio button is checked
                nextButton.disabled = !isChecked;
            });
        });
    });
</script>
