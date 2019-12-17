<!DOCTYPE html>
<html>

<head>
    <title>User Registration form in PHP using AJAX and jQuery</title>
    <!-- including jQuery library -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submitButton").click(function() {

                // using serialize function of jQuery to get all values of form
                var serializedData = $("#registrationForm").serialize();

                // Variable to hold request
                var request;
                // Fire off the request to process_registration_form.php
                request = $.ajax({
                    url: "process_registration_form.php",
                    type: "post",
                    data: serializedData
                });

                // Callback handler that will be called on success
                request.done(function(jqXHR, textStatus, response) {
                    // you will get response from your php page (what you echo or print)
                    // show successfully for submit message
                    $("#result").html(response);
                });

                // Callback handler that will be called on failure
                request.fail(function(jqXHR, textStatus, errorThrown) {
                    // Log the error to the console
                    // show error
                    $("#result").html('There is some error while submit');
                    console.error(
                        "The following error occurred: " +
                        textStatus, errorThrown
                    );
                });

                return false;

            });
        });
    </script>
</head>

<body>
    <!-- Creating user registration form -->
    <form id="registrationForm">
        First Name:<br>
        <input type="text" name="name" value=""><br> Email ID:<br>
        <input type="text" name="email" value=""><br> Password:
        <br>
        <input type="password" name="password" value=""><br>
        <br>
        <input id="submitButton" type="button" value="Submit">
    </form>

    <!-- The result of the AJAX response will be rendered inside this div -->
    <div id="result"></div>

</body>

</html>