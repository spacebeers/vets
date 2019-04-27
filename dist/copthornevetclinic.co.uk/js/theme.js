(function () {
    // Get all the toggletip buttons
    var toggletips = document.querySelectorAll('.toggletip');

    // Iterate over them
    Array.prototype.forEach.call(toggletips, function (toggletip) {

        // Get the live region element
        var target = toggletip.nextElementSibling;

        // Toggle the message
        toggletip.addEventListener('click', function () {
            window.setTimeout(function () {
                target.style.display = "block";
                target.setAttribute("aria-hidden", "false");
            }, 100);
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (toggletip !== e.target) {
                target.style.display = "none";
                target.setAttribute("aria-hidden", "true");
            }
        });

        // Remove toggletip on ESC
        toggletip.addEventListener('keydown', function (e) {
            if ((e.keyCode || e.which) === 27)
                target.style.display = "none"
                target.setAttribute("aria-hidden", "true");
        });
    });
}());