<script>
    //Checkbox behave like radio button
    $(".checkboxes").change(function() {
        $(".checkboxes").prop('checked', false);
        $(this).prop('checked', true);
    });

    // Function to enable or disable the next button based on checkbox status by adding/removing disabled attribute
    function checkSubmitEnabled() {
        const checkboxes = document.querySelectorAll('.checkboxes');
        const submitButton = document.getElementById('next');
        let isChecked = false;

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                isChecked = true;
            }
        });

        if (isChecked) {
            submitButton.removeAttribute('disabled');
        } else {
            submitButton.setAttribute('disabled', 'disabled');
        }
    }
    // Call the function initially
    checkSubmitEnabled();

    // Add event listener to each checkbox
    const checkboxes = document.querySelectorAll('.checkboxes');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            checkSubmitEnabled();
        });
    });

    // //Enable or disable next button whenever checkbox is checked/uncheck by removing/adding class name
    // document.addEventListener("DOMContentLoaded", function() {
    //     const nextBtn = document.getElementById("next");
    //     const checkboxes = document.querySelectorAll(".checkboxes");

    //     checkboxes.forEach(function(checkbox) {
    //         checkbox.addEventListener("change", function() {
    //             updateNextButtonState(nextBtn, checkboxes);
    //         });
    //     });

    //     function updateNextButtonState(nextBtn, checkboxes) {
    //         const anyChecked = Array.from(checkboxes).some(function(checkbox) {
    //             return checkbox.checked;
    //         });

    //         if (anyChecked) {
    //             nextBtn.classList.remove("disabled");
    //             nextBtn.style.pointerEvents = "auto";
    //             nextBtn.style.cursor = "pointer";
    //         } else {
    //             nextBtn.classList.add("disabled");
    //             nextBtn.style.pointerEvents = "none";
    //             nextBtn.style.cursor = "default";
    //         }
    //     }
    // });
</script>


