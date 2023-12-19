<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <style>
            body{
                background-color: rgb(27, 27, 27);
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 5%;
            }
            button{
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                border: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }
            #botoncito {
                color: #fff;
                background-color: #3498db;
            }
            #botoncito:hover {
                background-color: #2980b9;
            }
        </style>
    </head>
    <body class="antialiased">

    <button id="botoncito">Animales</button>

    <script>
    $(document).ready(function () {
        $('#botoncito').click(function () {
            // Realizar la petición AJAX
            $.ajax({
                url: 'http://127.0.0.1:8000/dameAnimales',
                type: 'get',
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert(response.datos);
                },
                error: function (error) {
                    alert(error);
                }
            });
        });
    });
</script>
    </body>
</html>
