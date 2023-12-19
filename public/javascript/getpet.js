$(document).ready(function() {
    $(document).ready(function() {
        function loadPetNames() {
            // Make an AJAX request to fetch pet names based on the owner ID
            $.ajax({
                type: "GET",
                url: "get_pet_names.php", // Create a new PHP file to handle this AJAX request
                success: function(data) {
                    $("#petName").html(data);
                    // Set the petId to the value of the only option
                    $("#petName option:selected").data("petid");
                    $("#petId").val($("#petName option:selected").data("petid"));

                }
            });
        }

        loadPetNames(); // Load initial pet names on page load
    });

    // Set the corresponding petId when petName is selected
    $("#petName").change(function() {
        var selectedPetId = $("#petName option:selected").data("petid");
        $("#petId").val(selectedPetId);
    });

});