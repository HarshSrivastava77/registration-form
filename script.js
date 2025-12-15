$(document).ready(function () {
    const $form = $("#regForm");
    const $submitBtn = $("#submitBtn");

    // Soft field highlight on focus/blur
    $("input, textarea").on("focus", function () {
        $(this).addClass("field-active");
    });

    $("input, textarea").on("blur", function () {
        $(this).removeClass("field-active");
    });

    // Form submit with basic validation + subtle submitting effect
    $form.on("submit", function (event) {
        event.preventDefault();

        const name = $("input[name='name']").val().trim();
        const email = $("input[name='email']").val().trim();
        const phone = $("input[name='phone']").val().trim();

        // Simple validation
        if (name === "" || email === "" || phone === "") {
            alert("Please fill all required fields.");
            return false;
        }

        if (phone.length < 10) {
            alert("Phone number must be at least 10 digits.");
            return false;
        }

        // Visual submitting state
        $submitBtn
            .addClass("is-submitting")
            .prop("disabled", true);

        // Small delay to let the animation be visible, then submit for real
        setTimeout(function () {
            $form.off("submit"); // remove this handler to avoid recursion
            $form.trigger("submit");
        }, 600);

        return false;
    });
});
