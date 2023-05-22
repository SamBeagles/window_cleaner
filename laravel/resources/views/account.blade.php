<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Sparkle - Existing Customers</title>

        <!-- Fonts -->
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <p><?php $output?></p>
    <?php
        $conn = mysqli_connect("localhost", "root", "root", "WindowCleanerDB");

        if(isset($_POST['name'])){
            $name = $_POST["name"];
            $address_line_1 = $_POST["address_line_1"];
            $town = $_POST["town"];
            $postcode = $_POST["postcode"];

            $query = "SELECT * FROM tb_data VALUES";
            $output = mysqli_query($conn, $query);
        }
        ?>
    </body>
</html>
