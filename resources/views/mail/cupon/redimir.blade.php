<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Cu, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redimir Cupon</title>
    <style>
        .importante span{
            font-weight: bold;
            font-size: 1.5em;
        }

        .importante {
            display: flex;
            align-content: center;
        }
    </style>
</head>
<body>
    <div class="contenido">
        <div class="descripcion">
            Has realizado la compra de un cupon en Cuponia, con este comprobante podrás
            redimir tu cupón en la tienda del aliado.
            <p class="importante">
                Recuerda que este cupon vence el <span>{{$vence}}</span>
            </p>
        </div>
        <div class="info">
            <h1 class="title">
                {{ $titulo }}
            </h1>
            <ul class="list-info">
                <li>
                    Cantidad: {{ $cantidad }}
                </li>
                <li>
                    Precio real: {{ $precio }}
                </li>
                <li>
                    Precio con cuponia: {{ $precio * (1 - $descuento / 100) }}
                </li>
                <li>
                    Descuento: {{ $descuento }}%
                </li>
                <li>
                    Aliado: {{ $aliado->nombre }}
                </li>
                <li>
                    Dirección: {{ $aliado->direccion }}
                </li>
            </ul>
        </div>
    </div>
</body>
</html>