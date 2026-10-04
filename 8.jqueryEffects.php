
<!DOCTYPE html>
<html>
<head>
    <title>jQuery Effects</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        #box {
            width: 300px;
            height: 150px;
            background-color: lightblue;
            margin: 30px auto;
            padding: 30px;
            box-sizing: border-box;
            font-size: 20px;
        }

        button {
            padding: 10px 18px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>jQuery Effects</h1>

    <div id="box">
        Hello! This is jQuery Effect Box.
    </div>

    <button id="hide">Hide</button>
    <button id="show">Show</button>
    <button id="toggle">Toggle</button>

    <br>

    <button id="fadeIn">Fade In</button>
    <button id="fadeOut">Fade Out</button>
    <button id="fadeToggle">Fade Toggle</button>

    <br>

    <button id="slideUp">Slide Up</button>
    <button id="slideDown">Slide Down</button>
    <button id="slideToggle">Slide Toggle</button>

    <br>

    <button id="animate">Animate</button>


    <script>

        // Hide
        $("#hide").click(function() {
            $("#box").hide();
        });


        // Show
        $("#show").click(function() {
            $("#box").show();
        });


        // Toggle
        $("#toggle").click(function() {
            $("#box").toggle();
        });


        // Fade In
        $("#fadeIn").click(function() {
            $("#box").fadeIn();
        });


        // Fade Out
        $("#fadeOut").click(function() {
            $("#box").fadeOut();
        });


        // Fade Toggle
        $("#fadeToggle").click(function() {
            $("#box").fadeToggle();
        });


        // Slide Up
        $("#slideUp").click(function() {
            $("#box").slideUp();
        });


        // Slide Down
        $("#slideDown").click(function() {
            $("#box").slideDown();
        });


        // Slide Toggle
        $("#slideToggle").click(function() {
            $("#box").slideToggle();
        });


        // Animate
        $("#animate").click(function() {
            $("#box").animate({
                width: "500px",
                height: "250px",
                fontSize: "30px"
            }, 1000);
        });

    </script>

</body>
</html>
