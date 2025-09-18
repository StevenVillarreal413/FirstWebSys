<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
        <?php
        $method=$_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            $lname = $_POST("lname");
            $fname = $_POST("fname");

            echo $lname.", ".$fname;
        }
        $lname=$_GET["fname"];
        $fname=$_GET["lname"];

        echo $lname.", ".$fname;
    ?>
    <form action="form2.php" method="post">
        <p>
            <label for="lname">Last Name</label><br>
            <input type="text" name="lname" id="lname">
        </p>
        <p>
            <label for="fname">First Name</label><br>
            <input type="text" name="fname">
        </p>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>