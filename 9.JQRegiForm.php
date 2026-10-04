
<!DOCTYPE html>
<html>
<head>

    <title>Registration Form</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 450px;
            margin: 40px auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 80px;
        }

        .gender {
            width: auto;
        }

        .error {
            color: red;
            font-size: 13px;
            display: block;
            margin-top: 3px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Registration Form</h2>

    <form id="registrationForm">

        <!-- Name -->
        <label>Name:</label>
        <input type="text" id="name">
        <span class="error" id="nameError"></span>


        <!-- Address -->
        <label>Address:</label>
        <input type="text" id="address"></textarea>
        <span class="error" id="addressError"></span>


        <!-- Username -->
        <label>Username:</label>
        <input type="text" id="username">
        <span class="error" id="usernameError"></span>


        <!-- Email -->
        <label>Email:</label>
        <input type="text" id="email">
        <span class="error" id="emailError"></span>


        <!-- Password -->
        <label>Password:</label>
        <input type="password" id="password">
        <span class="error" id="passwordError"></span>


        <!-- Website -->
        <label>Website:</label>
        <input type="text" id="website">
        <span class="error" id="websiteError"></span>


        <!-- Phone -->
        <label>Phone:</label>
        <input type="text" id="phone">
        <span class="error" id="phoneError"></span>


        <!-- Gender -->
        <label>Gender:</label>

        <input type="radio" class="gender" name="gender" value="Male">
        Male

        <input type="radio" class="gender" name="gender" value="Female">
        Female

        <input type="radio" class="gender" name="gender" value="Other">
        Other

        <span class="error" id="genderError"></span>


        <!-- Course -->
        <label>Course:</label>

        <select id="course">

            <option value="">-- Select Course --</option>

            <option value="BCA">
                BCA
            </option>

            <option value="BBS">
                BBS
            </option>

            <option value="BIT">
                BIT
            </option>

            <option value="BIM">
                BIM
            </option>

        </select>

        <span class="error" id="courseError"></span>


        <!-- Submit -->
        <button type="submit">
            Register
        </button>

    </form>

</div>


<script>

$(document).ready(function() {

    $("#registrationForm").submit(function(event) {

        // Prevent form submission
        event.preventDefault();


        // Clear previous errors
        $(".error").text("");


        // Get values
        var name = $("#name").val().trim();
        var address = $("#address").val().trim();
        var username = $("#username").val().trim();
        var email = $("#email").val().trim();
        var password = $("#password").val();
        var phone = $("#phone").val().trim();
        var gender = $("input[name='gender']:checked").val();
        var course = $("#course").val();

        var valid = true;


        // =================================
        // NAME VALIDATION
        // =================================

        if (name == "") {

            $("#nameError").text("Name is required.");
            valid = false;

        }
        else if (!/^[A-Za-z ]+$/.test(name)) {

            $("#nameError").text(
                "Name should not contain numbers or special characters."
            );

            valid = false;
        }


        // =================================
        // ADDRESS VALIDATION
        // =================================

        if (address == "") {

            $("#addressError").text("Address is required.");

            valid = false;
        }


        // =================================
        // USERNAME VALIDATION
        // =================================

        if (username == "") {

            $("#usernameError").text(
                "Username is required."
            );

            valid = false;

        }
        else if (!/^[A-Za-z0-9_]+$/.test(username)) {

            $("#usernameError").text(
                "Username can contain letters, numbers and underscore only."
            );

            valid = false;
        }


        // =================================
        // EMAIL VALIDATION
        // =================================

        if (email == "") {

            $("#emailError").text(
                "Email is required."
            );

            valid = false;

        }
        else if (!email.includes("@")) {

            $("#emailError").text(
                "Email must contain @ symbol."
            );

            valid = false;
        }


        // =================================
        // PASSWORD VALIDATION
        // =================================

        if (password == "") {

            $("#passwordError").text(
                "Password is required."
            );

            valid = false;

        }
        else if (password.length < 8) {

            $("#passwordError").text(
                "Password must be at least 8 characters."
            );

            valid = false;

        }
        else if (!/[0-9]/.test(password)) {

            $("#passwordError").text(
                "Password must contain at least one digit."
            );

            valid = false;

        }
        else if (!/[A-Z]/.test(password)) {

            $("#passwordError").text(
                "Password must contain at least one uppercase letter."
            );

            valid = false;

        }
        else if (!/[a-z]/.test(password)) {

            $("#passwordError").text(
                "Password must contain at least one lowercase letter."
            );

            valid = false;

        }
        else if (!/[^A-Za-z0-9]/.test(password)) {

            $("#passwordError").text(
                "Password must contain at least one special character."
            );

            valid = false;
        }


        // =================================
        // PHONE VALIDATION
        // =================================

        if (phone == "") {

            $("#phoneError").text(
                "Phone number is required."
            );

            valid = false;

        }
        else if (!/^[0-9]+$/.test(phone)) {

            $("#phoneError").text(
                "Phone number should contain numbers only."
            );

            valid = false;

        }
        else if (!/^(98|97|96)/.test(phone)) {

            $("#phoneError").text(
                "Phone number should start with 98, 97 or 96."
            );

            valid = false;
        }


        // =================================
        // GENDER VALIDATION
        // =================================

        if (!gender) {

            $("#genderError").text(
                "Please select your gender."
            );

            valid = false;
        }


        // =================================
        // COURSE VALIDATION
        // =================================

        if (course == "") {

            $("#courseError").text(
                "Please select a course."
            );

            valid = false;
        }


        // =================================
        // FINAL RESULT
        // =================================

        if (valid) {

            alert("Registration successful!");

        }

    });

});

</script>

</body>
</html>

