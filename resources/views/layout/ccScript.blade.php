<script>
    //Checkbox behave like radio button
    $(".checkboxes").change(function() {
        $(".checkboxes").prop('checked', false);
        $(this).prop('checked', true);
    });

    //Enable next button whenever checkbox is checked
    document.addEventListener("DOMContentLoaded", function() {
        const nextBtn = document.getElementById("next");
        const checkboxes = document.querySelectorAll(".checkboxes");

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener("change", function() {
                updateNextButtonState(nextBtn, checkboxes);
            });
        });

        function updateNextButtonState(nextBtn, checkboxes) {
            const anyChecked = Array.from(checkboxes).some(function(checkbox) {
                return checkbox.checked;
            });

            if (anyChecked) {
                nextBtn.classList.remove("disabled");
                nextBtn.style.pointerEvents = "auto";
                nextBtn.style.cursor = "pointer";
            } else {
                nextBtn.classList.add("disabled");
                nextBtn.style.pointerEvents = "none";
                nextBtn.style.cursor = "default";
            }
        }
    });
</script>


