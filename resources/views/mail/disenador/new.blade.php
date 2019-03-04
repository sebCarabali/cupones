<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet"> 
    <style>
        body {
            background: #b5bdc8;
            /* Old browsers */
            background: -moz-linear-gradient(top, #b5bdc8 0%, #828c95 36%, #28343b 100%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #b5bdc8 0%, #828c95 36%, #28343b 100%);

            font-family: 'ZCOOL QingKe HuangYou', cursive;
            /* Chrome10-25,Safari5.1-6 */
        }

        .contanedor {
            width: 760px;
            margin: auto;
            margin-top: 100px;
        }

        .body {
            padding: 20px;
            width: 100%;
            font-size: 1.3em;
            line-height: 2.7em;
            background-color: #fff;
            text-align: justify;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #2a6fbd;
            padding: 20px;
            width: 100%;
            color: #fff;
            text-align: center;
            font-size: 1.6em;
        }

        .footer {
            padding: 20px;
            text-align: center;
            background-color: #2a8fbd;
            width: 100%;
            color: #fff;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="center">Welcome</h1>
        </div>
        <div class="body">
            Bienvenido a Cuponia, su contraseña es {{ $password }}. Ahora podra ingresar cupones para tus aliados de
            confianza.
            <p class="center">Empieza a diseñar.</p>
        </div>
        <div class="footer">
            <p class="center">@Cuponia</p>
        </div>
    </div>
</body>

</html>
