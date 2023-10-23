$(document).ready(function() {
    let checkInDate = null;
    let checkOutDate = null;
    $("#datepicker").datepicker({
        theme: "bootstrap"
    });
    $("#datepicker-check-in").datepicker({
        minDate: new Date(),
        maxDate: "+1y",
        dateFormat: "mm/dd/yy",
        onSelect: function(date) {
            checkInDate = $("#datepicker-check-in").datepicker("getDate");
            updateNumberOfNights(checkInDate, checkOutDate);
        }
    });

    $("#datepicker-check-out").datepicker({
        minDate: new Date(),
        maxDate: "+1y",
        dateFormat: "mm/dd/yy",
        onSelect: function(date) {
            checkOutDate = $("#datepicker-check-out").datepicker("getDate");
            updateNumberOfNights(checkInDate, checkOutDate);
        }
    });

    // Function to calculate the number of nights
    function calculateNights(checkInDate, checkOutDate) {
        if (checkInDate && checkOutDate) {
            const oneDay = 1000 * 60 * 60 * 24;
            const diffInDays = (checkOutDate - checkInDate) / oneDay;
            return Math.floor(diffInDays);
        }
        return 0; // Return 0 if either check-in or check-out date is missing
    }

    // Function to update the number of nights display
    function updateNumberOfNights(checkInDate, checkOutDate) {
        const numberOfNights = calculateNights(checkInDate, checkOutDate);
        $("#number-of-nights-display").text(numberOfNights);
    }
    // Hide the check-out input field by default
    $("#datepicker-check-out").hide();

    // Show the check-out input field when the "overnight" radio button is selected
    $("input[name='booking-type']").change(function() {
        if ($(this).val() === "overnight") {
            $("#datepicker-check-out").show();
            $("#number-of-nights-display").show();
        } else {
            $("#datepicker-check-out").hide();
            $("#number-of-nights-display").hide();

        }
    });
});