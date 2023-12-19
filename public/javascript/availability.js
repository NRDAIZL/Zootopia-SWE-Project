
function insertNumbers() {
  var start = parseInt(document.getElementById("starttime").value);
  var end = parseInt(document.getElementById("endtime").value);

  // Generate the array of numbers
  var numbers = [];
  for (var i = start; i <= end; i++) {
    numbers.push(i);
  }

  // Prepare the data to send to the PHP script
  var data = {
    numbers: numbers
  };

  // Perform an AJAX request to insert the numbers into the database
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Assuming the insertion is successful
        document.getElementById("output").innerHTML = xhr.responseText;
      } else {
        // Handle the error case
        document.getElementById("output").innerHTML = "Error inserting numbers into the database.";
      }
    }
  };
  xhr.open("POST", "insert_numbers.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.send(JSON.stringify(data));
}
