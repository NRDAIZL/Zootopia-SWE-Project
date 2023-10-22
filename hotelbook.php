<!-- <!DOCTYPE html>
<html>

<head>
    <title>Pet Hotel Booking Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#datepicker-check-in").datepicker({
                minDate: new Date(),
                maxDate: "+1y",
                dateFormat: "mm/dd/yy"
            });

            $("#datepicker-check-out").datepicker({
                minDate: new Date(),
                maxDate: "+1y",
                dateFormat: "mm/dd/yy"
            });
        });

        function calculateNights(checkInDate, checkOutDate) {
            const oneDay = 1000 * 60 * 60 * 24;
            const diffInDays = (checkOutDate - checkInDate) / oneDay;
            return diffInDays;
        }
        $("#datepicker-check-in").datepicker("option", "onSelect", function(date) {
            const checkOutDate = $("#datepicker-check-out").datepicker("getDate");
            const numberOfNights = calculateNights(date, checkOutDate);
            // Update the number of nights input field with the calculated number of nights
            $("#number-of-nights").val(numberOfNights);
        });

        $("#datepicker-check-out").datepicker("option", "onSelect", function(date) {
            const checkInDate = $("#datepicker-check-in").datepicker("getDate");
            const numberOfNights = calculateNights(checkInDate, date);
            // Update the number of nights input field with the calculated number of nights
            $("#number-of-nights").val(numberOfNights);
        });
    </script>
    <style>
        .booking-form {
            width: 500px;
            margin: 0 auto;
        }
        
        .booking-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .booking-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
<?php include 'includes/menu.php';?>

    <input type="text" id="datepicker-check-in" placeholder="Check-in date">
    <input type="text" id="datepicker-check-out" placeholder="Check-out date">
    <input type="number" id="number-of-nights" placeholder="Number of nights">

</body>


</html> -->
<!DOCTYPE html>
<html>

<head>
    <title>Pet Hotel Booking Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
     <script>
    $(document).ready(function() {
            $("#datepicker-check-in").datepicker({
                minDate: new Date(),
                maxDate: "+1y",
                dateFormat: "mm/dd/yy"
            });

            $("#datepicker-check-out").datepicker({
                minDate: new Date(),
                maxDate: "+1y",
                dateFormat: "mm/dd/yy"
            });

            // Update the number of nights input field whenever the check-in or check-out date is changed
            $("#datepicker-check-in").datepicker("option", "onSelect", function(date) {
                updateNumberOfNights();
            });

            $("#datepicker-check-out").datepicker("option", "onSelect", function(date) {
                updateNumberOfNights();
            });

                        // Update the number of nights input field with the calculated number of nights
// Calculate the number of nights between the two selected dates
            function calculateNights(checkInDate, checkOutDate) {
                const oneDay = 1000 * 60 * 60 * 24;
                const diffInDays = (checkOutDate - checkInDate) / oneDay;
                return Math.floor(diffInDays);
            }


            function updateNumberOfNights() {
                const checkInDate = $("#datepicker-check-in").datepicker("getDate");
                const checkOutDate = $("#datepicker-check-out").datepicker("getDate");
                const numberOfNights = calculateNights(checkInDate, checkOutDate);
                $("#number-of-nights-display").text(numberOfNights);
            }
        });
    </script> 
    <style>
        .booking-form {
            width: 500px;
            margin: 0 auto;
        }
        
        .booking-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .booking-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
        
        #number-of-nights-display {
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php include 'includes/menu.php';?>
    <div class="booking-form">
        <h1>Pet Hotel Booking Form</h1>

        <input type="text" id="datepicker-check-in" placeholder="Check-in date">
        <input type="text" id="datepicker-check-out" placeholder="Check-out date"> Number of nights: 
        <div id="number-of-nights-display"></div>

        <button type="submit">Book Now</button>
    </div>
</body>

</html>

</html>