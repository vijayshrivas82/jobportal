<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $field = $_POST['field'];
    $graduationDate = $_POST['graduationDate'];

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "mydata";

    // Create a connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Your SQL query
    $sql = "INSERT INTO users (username, email, password, phone, gender, field, graduationDate) VALUES ('$username', '$email', '$password', '$phone', '$gender', '$field', '$graduationDate')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: url('https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg') center/cover no-repeat;
        background-color: rgba(0, 0, 0, 0.5); /* Transparent background color */
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background: rgba(255, 255, 255, 0.8); /* Transparent white background color */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
        margin-top: 5px;
        font-size: 14px;
    }

    /* Additional Styling */
    input[type="date"] {
        padding: 10px;
    }

    select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" viewBox="0 0 16 8"><path fill="%23333" d="M8 8L0 0h16z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 16px 8px;
    }

    select::-ms-expand {
        display: none;
    }
</style>
</head>
<body>
    
<div class="container">
    <h2>Registration Form</h2>
    <form method="POST" action="">
        <label for="username">Username *</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password *</label>
        <input type="password" id="password" name="password" required>
        
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone">
        
        
        
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>  
        <label for="field">Field</label>
        <input type="text" id="field" name="field">
        
        <label for="graduationDate">Graduation Date</label>
        <input type="date" id="graduationDate" name="graduationDate">
        
        <input type="submit" value="Register" name="submit">
    </form>
    <div id="error-message" class="error"></div>
</div>

<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var errorMessage = document.getElementById("error-message");
        errorMessage.innerHTML = "";

        if (username.trim() === "") {
            errorMessage.innerHTML = "Username is required.";
            return false;
        }

        if (email.trim() === "") {
            errorMessage.innerHTML = "Email is required.";
            return false;
        }

        if (password.trim() === "") {
            errorMessage.innerHTML = "Password is required.";
            return false;
        }

        return true;
    }
</script>
</body>
</html>
