@extends('layouts.master')
@section('titulo')
Cupon
@endsection
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="product-page-meta box">
                <h4>{{ $cupon->titulo }}</h4>
                <p>{{ str_limit($cupon->descripcion, 70) }}</p><a class="btn btn-primary btn-lg btn-block"
                    href="{{ route('cart.add', $cupon->id) }}">${{ $cupon->precio * (1 - $cupon->porcentaje_descuento / 100) }} Agregar al Carro</a>
                <ul class="list product-page-meta-info">
                    <li>
                        <ul class="list product-page-meta-price-list">
                            <li><span class="product-page-meta-title">Precio</span><span
                                    class="product-page-meta-price">${{ $cupon->precio }}</span>
                            </li>
                            <li><span class="product-page-meta-title">Descuento</span><span
                                    class="product-page-meta-price"> {{ $cupon->porcentaje_descuento }}% </span>
                            </li>
                            <li><span class="product-page-meta-title">Ahorro</span><span
                                    class="product-page-meta-price">
                                    ${{ $cupon->porcentaje_descuento * $cupon->precio / 100 }} </span>
                            </li>
                        </ul>
                    </li>
                    <li><span class="product-page-meta-title">Válido hasta</span>
                        <!-- COUNTDOWN -->
                        <div data-countdown="{{ date("m/d/Y", strtotime($cupon->fecha_caducidad)) }}"
                            class="countdown countdown-inline"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <!--
            <div class="fotorama">
                <img src="img/960x540.png" alt="Image Alternative text" title="cascada" />
                <img src="img/960x540.png" alt="Image Alternative text" title="waipio valley" />
                <img src="img/960x540.png" alt="Image Alternative text"
                    title="the best mode of transport here in maldives" />
            </div>
            -->
            <!--<div class="gap gap-small"></div>-->
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-tag"></i> Descripción</a>
                    </li>
                    <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-info"></i> Condiciones</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                        <div class="row text-smaller">
                            <div class="col-md-12">
                                <h4>Descripción</h4>
                                <p>
                                    {{ $cupon->descripcion }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="google-map-tab">
                        <div class="row text-smaller">
                            <div class="col-md-12">
                                <h4>Condiciones</h4>
                                <p>
                                    {{ $cupon->condiciones }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <h3 class="mb20">Tal vez te pueda interesar</h3>
            <div class="row row-wrap">
                @foreach ($cupones as $item)
                <a class="col-md-4" href="{{ action('InicioController@loadCupon', $item->id) }}">
                    <div class="product-thumb">
                        <!--<header class="product-header">
                            <img src="img/800x600.png" alt="Image Alternative text" title="Aspen Lounge Chair" />
                        </header>-->
                        <div class="product-inner">
                            <h5 class="product-title">{{ $item->titulo }}</h5>
                            <p class="product-desciption"> {{ str_limit($item->descripcion, 70) }} </p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span
                                            class="product-price">${{ $item->precio - ( $item->porcentaje_descuento * $item->precio / 100) }}</span>
                                    </li>
                                    <li><span class="product-old-price">${{ $item->precio }}</span>
                                    </li>
                                    <li><span class="product-save">Save {{ $item->porcentaje_descuento }}%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="gap gap-small"></div>

        </div>
    </div>

</div>

<!--
    
-->

<div class="gap"></div>

<script>
    var date = document.getElementById("countdown").getAttribute("data-countdown");
    // Update the count down every 1 second
    var x = setInterval(function () {
        var countDownDate = new Date(date).getTime();
        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = days + " Días " + hours + "h " +
            minutes + "m " + seconds + "s";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRÓ";
        }
    }, 1000);

</script>
@endsection
