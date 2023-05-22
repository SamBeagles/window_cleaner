<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="stylesheet" href="./../css/app.css">

        <title>Sparkle</title>

        <!-- Fonts -->
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div style="display:flex; margin: 150px 150px; height:200px; width:200px; border:3px dashed #000055; border-radius:50%;">
            <div>
                    <a href="form" style="text-align:center; justify-content: center; align-items: center; margin:25px 25px; position:relative; display:flex; height:75px; width:75px; border:3px dashed #000033; border-radius:50%;">
                        New Customer
                    </a>
            </div>
            <div>
                <a href="account" style="text-align:center; justify-content: center; align-items: center; margin:50px 50px 0px -10px;position:relative; display:flex; height:75px; width:75px; border:3px dashed #000033; border-radius:50%;">
                    Existing Customer
                </a>
            </div>
        </div>
    </body>
</html>
