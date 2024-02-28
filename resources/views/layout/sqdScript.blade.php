<script>
    /* This code adds a click event listener to each input element, updating a display element with the value of the clicked input. */
    let star = document.querySelectorAll('input');
    let showValue = document.querySelector('#rating-value');

    for (let i = 0; i < star.length; i++) {
        star[i].addEventListener('click', function() {
            i = this.value;

            showValue.innerHTML = i;
        });
    }

    /* This code disables the Next button initially and enables it when any radio button is checked. */
    document.addEventListener('DOMContentLoaded', function() {
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        const nextButton = document.getElementById('nextsqd');

        nextButton.disabled = true;

        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', function() {
                const isChecked = Array.from(radioButtons).some(function(radio) {
                    return radio.checked;
                });

                nextButton.disabled = !isChecked;
            });
        });
    });
</script>
