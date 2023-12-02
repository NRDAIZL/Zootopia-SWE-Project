<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Pet</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input, textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
    }

    .btn {
      background-color: #dc2020;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #dc2827;
    }
  </style>
</head>
<body>
  <h1>Add New Pet</h1>
  <form action="add_pet.php" method="post" enctype="multipart/form-data">
    <label for="petName">Pet Name:</label>
    <input type="text" id="petName" name="petName" required>

    <label for="petType">Pet Type:</label>
    <select id="petType" name="petType" required>
    <option value="Dog">Dog</option>
   <option value="Cat">Cat</option>
   <option value="Rabbit">Rabbit</option>
   <option value="Hamster">Hamster</option>
   <option value="Bird">Bird</option>
   <option value="Fish">Fish</option>
   <option value="Reptile">Reptile</option>
   <option value="Other">Other</option>
    </select>

    <label for="petBreed">Pet Breed:</label>
    <input type="text" id="petBreed" name="petBreed" required>

    <label for="petBirthdate">Pet Birthdate:</label>
<input type="date" id="petBirthdate" name="petBirthdate" required>


    <label for="petGender">Pet Gender:</label>
    <select id="petGender" name="petGender" required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <label for="petPicture">Pet Picture:</label>
    <input type="file" id="petPicture" name="petPicture">

    <button class="btn" type="submit">Add Pet</button>
  </form>
</body>
</html>
