@extends('layouts.master')
@section('titulo')
Contactanos
@endsection
@section('contenido')
<div class="container">
    <div class="row row-wrap">
        <div class="col-md-6">
            <div id="map-canvas" style="width:100%; height:300px;"></div>
        </div>
        <div class="col-md-3">
            <form method="post"
                action="{{ route('comentario') }}">
                @csrf 
                <fieldset>
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" id="email" name="email" type="text" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label>Comentario</label>
                        <textarea class="form-control" name="comentario" id="message" placeholder="Ingrese su mensaje"></textarea>
                    </div>
                    <input type="submit" value="Enviar comentario" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
        <div class="col-md-3">
            <h5>Contact Info</h5>
            <p>Fames varius varius magnis et pharetra urna dictum consequat lacinia interdum facilisi leo tristique
                pretium felis fusce fringilla praesent dui</p>
            <ul class="list">
                <li><i class="icon-map-marker"></i> Location: Mountain View, CA 94043</li>
                <li><i class="icon-phone"></i> Phone: 555-555-555</li>
                <li><i class="icon-envelope"></i> E-mail: <a href="#">mail@domain.com</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="gap gap-small"></div>
</div>
@endsection
