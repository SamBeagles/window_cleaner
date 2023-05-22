<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Sparkle - New Customer</title>

        <!-- Fonts -->
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>New Customer</h1>
        <h2>Name</h2>
        <input type="text" id="name">
        <br>
        <h2>Address Line 1</h2>
        <input type="text" id="address_line_1">
        <br>
        <h2>Town</h2>
        <input type="text" id="town">
        <br>
        <h2>Postcode</h2>
        <input type="text" id="postcode">
        <br>
        <button type="button" id="insert">Insert</button>

        <script type="text/javascript">
            $('#insert').on('click', function() {
                var data = {
                    name: $('#name').val(),
                    address_line_1: $('#address_line_1').val(),
                    town: $('#town').val(),
                    postcode: $('#postcode').val()
                };
                $.ajax({
                    url: '/form',
                    type: 'post',
                    data: { data ,
                    _token: '{!! csrf_token() !!}'
                    },
                    success: function(){
                        alert('Inserted Successfully')
                    }
                });
            });
        </script>

        <?php
        $conn = mysqli_connect("localhost", "root", "root", "WindowCleanerDB");

        if(isset($_POST['name'])){
            $name = $_POST["name"];
            $address_line_1 = $_POST["address_line_1"];
            $town = $_POST["town"];
            $postcode = $_POST["postcode"];

            $query = "INSERT INTO tb_data ('id', 'name', 'address_line_1', 'town', 'postcode') VALUES('', '$name','$address_line_1','$town','$postcode')";
            mysqli_query($conn, $query);
        }
        ?>
    </body>
</html>
