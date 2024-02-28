<script>
    //Checkbox behave like radio button
    // $(".checkboxes").change(function() {
    //     $(".checkboxes").prop('checked', false);
    //     $(this).prop('checked', true);
    // });

    // Function to enable or disable the next button based on checkbox status by adding/removing disabled attribute
    function checkSubmitEnabled() {
        const checkboxes = document.querySelectorAll('.radios');
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

    checkSubmitEnabled();

    // Add event listener to each checkbox
    const checkboxes = document.querySelectorAll('.radios');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            checkSubmitEnabled();
        });
    });
</script>


