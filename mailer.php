<!DOCTYPE html>
<html>
<head>
    <title>Your Form</title>
    <!-- Add any necessary styles or scripts here -->
</head>
<body>
    <form method="POST" action="">
        <!-- Form fields go here -->
        <label for="fromcountry">From Country:</label>
        <input type="text" name="fromcountry" id="fromcountry" required><br><br>

        <!-- Add more form fields as needed -->

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    require_once "config.php";

    if (isset($_POST["submit"])) {

        $fc = $_POST["fromcountry"];
        // Capture more form field values as needed

        $ins = "INSERT INTO inquiry (fromcountry, fromaddress, tocountry, toaddress, Size, qty, weight, freighttype, category, email, status) 
                VALUES ('$fc', '$fa', '$tc', '$ta', '$size', '$qty', '$weight', '$ft', '$category', '$email', 'to be inquired')";

        $query1 = mysqli_query($connection, $ins);

        if ($query1) {
            $emailAddress = 'moaiz599@gmail.com';
            $subject = 'Test email';
            $body = "From country: $fc \n\n From address: $tc";

            $mailtoLink = "mailto:$emailAddress?subject=" . urlencode($subject) . "&body=" . urlencode($body);

            echo '<script>window.location.href = "' . $mailtoLink . '";</script>';
            exit; // Terminate the script to prevent further execution
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
    ?>
</body>
</html>
