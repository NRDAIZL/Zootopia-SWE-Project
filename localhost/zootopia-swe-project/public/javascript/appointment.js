function updateaptime() {
    // var apday1=document.getElementById("apday").value
  //alert(apday1)
    // console.log("inn     funccccc");
 //  alert("hi from func");
 // return 0;
   
 console.log("hihelllc");

               }








function apvalidateForm() {
    var pettype = document.getElementById("pettypeid").value;
    var petname = document.getElementById("petnameid").value;
    var apday = document.getElementById("apday").value;
    var aptime = document.getElementById("aptime").value;

    // Clear previous error messages
    clearErrorMessages();
//|| aptime==="0"
    var errorMessages = [];
    if (pettype === "0" || apday === "" ) {

    if (pettype === "0") {
        displayErrorMessage("petTypeError", "Please select a pet type");
        errorMessages.push("Please select a pet type");
        
    }

    if (apday === "") {
        displayErrorMessage("apDayError", "Please select an appointment day");
        errorMessages.push("Please select an appointment day");
      //  return false;
    }

    // if (aptime === "0") {
    //     displayErrorMessage("apTimeError", "Please select an appointment time");
    //     errorMessages.push("Please select an appointment time");
    //    // return false;
    // }

    return false; //the big if makes them appear together 
}

    if (errorMessages.length > 0) {
        // If multiple fields are missing, display all error messages together
        displayErrorMessages(errorMessages.join('<br>'));
        return false; // Prevent form submission
    }

    

    return true; // Allow form submission
}

function displayErrorMessage(errorElementId, message) {
    var errorElement = document.getElementById(errorElementId);
    errorElement.innerHTML = message;
}

function clearErrorMessages() {
    var errorElements = document.getElementsByClassName("error-message");
    for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].innerHTML = "";
    }
}


