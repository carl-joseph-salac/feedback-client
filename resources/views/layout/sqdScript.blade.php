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


    window.onload = function() {
        var rating = "{{ session('rating', '') }}";
        if (rating !== '') {
            document.getElementById('nextsqd').disabled = false;
        }
    };



    /* Function to enable or disable the submit button based on radio button status by adding/removing disabled attribute */
    // function enableNextButton() {
    //     const ratingRadios = document.querySelectorAll('.rating-radio');
    //     const nextButton = document.getElementById('nextsqd');

    //     // Add event listener to each radio button
    //     ratingRadios.forEach(radio => {
    //         radio.addEventListener('change', () => {
    //             // Check if any radio button is selected
    //             const isChecked = [...ratingRadios].some(radio => radio.checked);
    //             // Enable or disable the next button based on selection
    //             if (isChecked) {
    //                 nextButton.removeAttribute('disabled');
    //             } else {
    //                 nextButton.setAttribute('disabled', 'disabled');
    //             }
    //         });
    //     });
    // }

    // // Call the function initially
    // enableNextButton();




    //     document.addEventListener('DOMContentLoaded', function() {
    //         console.log("DOMContentLoaded event fired");

    //         const ratingRadios = document.querySelectorAll('.rating-radio');

    //         ratingRadios.forEach(function(radio) {
    //             radio.addEventListener('change', function() {
    //                 const sessionName = this.dataset.sessionName;
    //                 const isChecked = this.checked;
    //                 console.log("Session Name:", sessionName);
    //                 console.log("Is Checked:", isChecked);
    //                 sessionStorage.setItem(sessionName, isChecked);
    //             });
    //         });
    // });
</script>
