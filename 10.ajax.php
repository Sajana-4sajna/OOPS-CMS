<?php

/* =========================================
   AJAX LOGIN PROCESS
========================================= */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userid = $_POST["userid"];
    $password = $_POST["password"];

    // Valid login details
    $valid_userid = "admin";
    $valid_password = "12345";

    if (
        $userid == $valid_userid &&
        $password == $valid_password
    ) {

        echo "success";

    } else {

        echo "failed";
    }

    // Very important
    // Stop PHP so HTML below is not returned to AJAX
    exit();
}

?>


<!DOCTYPE html>
<html>

<head>

    <title>AJAX Login Form</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>


<body>


<div id="loginBox">

    <h2>Login Form</h2>


    <form id="loginForm">

        <label>User ID:</label>

        <input
            type="text"
            id="userid"
            name="userid"
        >

        <br><br>


        <label>Password:</label>

        <input
            type="password"
            id="password"
            name="password"
        >

        <br><br>


        <input
            type="submit"
            value="Login"
        >

    </form>


    <div id="message"></div>

</div>



<script>

$(document).ready(function () {


    $("#loginForm").submit(function (event) {


        // Prevent page reload
        event.preventDefault();


        // Get values
        var userid = $("#userid").val();

        var password = $("#password").val();



        // AJAX request
        $.ajax({

            // Send request to same file
            url: "",

            type: "POST",

            data: {

                userid: userid,

                password: password

            },


            success: function (response) {


                if (response.trim() == "success") {


                    // Hide input form
                    $("#loginForm").hide();


                    // Show welcome message
                    $("#message").html(
                        "<h2>Welcome " + userid + "</h2>"
                    );


                } else {


                    // Show error
                    $("#message").html(
                        "Invalid User ID or Password. Please try again."
                    );

                }

            }

        });


    });


});

</script>


</body>

</html>