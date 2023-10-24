// Validate the form
function validateForm() {
    // Check if the booking type is selected
    if (!document.querySelector('input[name="booking-type"]:checked')) {
        alert('Please select a booking type.');
        return false;
    }

    // Check if the check-in date is selected
    if (!document.getElementById('datepicker-check-in').value) {
        alert('Please select a check-in date.');
        return false;
    }

    // If the booking type is overnight, check if the check-out date is selected
    if (document.querySelector('input[name="booking-type"]:checked').value === 'overnight' && !document.getElementById('datepicker-check-out').value) {
        alert('Please select a check-out date.');
        return false;
    }

    // Check if the animal type is selected
    if (!document.getElementById('animal-type').value) {
        alert('Please select an animal type.');
        return false;
    }

    // Check if the pet gender is selected
    if (!document.querySelector('input[name="gender"]:checked')) {
        alert('Please select a pet gender.');
        return false;
    }

    // If the form is valid, return true
    return true;
}