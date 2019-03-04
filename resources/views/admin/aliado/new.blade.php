@extends('layouts.master')
@section('titulo', 'Registro nuevo aliado')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-pills nav-stacked nav-arrow">
                    <li>
                        <a href="{{ route('aliados.index') }}">Ver todos</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('aliados.new') }}">Registrar</a>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="frm">
                <div class="frm-header">
                    Registrar nuevo aliado
                </div>
                <div class="frm-body">
                    <form action="{{ route('aliados.new') }}" method="post">
                        @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">
                            {{ $err }}
                        </p>
                        @endforeach
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" required class="form-control" name="nombre" id="nombre" placeholder="Tu Nombre"
                                    value="{{ old('nombre') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion">Direccion</label>
                                <input type="text" required class="form-control" name="direccion" id="direccion"
                                    placeholder="Tu direccion" value="{{ old('direccion') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sitio_web">Sitio web</label>
                                <input type="url" class="form-control" name="sitio_web" id="sitio_web" placeholder="wwww.misitioweb.com"
                                    value="{{ old('sitio_web') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefono">telefono</label>
                                <input type="phone" class="form-control" name="telefono" id="telefono" placeholder="+57 3045456751"
                                    value="{{ old('telefono') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Facebook</label>
                                <input type="url" class="form-control" name="facebook" placeholder="Facebook" value="{{ old('facebook') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="twitter">Twitter</label>
                                <input class="form-control" name="twitter" placeholder="Twitter" type="url" value="{{ old('twitter') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="instagram">Instagram</label>
                                <input type="url" class="form-control" name="instagram" placeholder="Instagram" value="{{ old('instagram') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input class="form-control" name="email" placeholder="email@host.com" type="email"
                                    value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" required cols="30" placeholder="Escribe alfo sobre el aliado."
                                    rows="10" class="form-control">{{ old('descripcion') }}"</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button class="btn btn-danger" type="reset">Cancelar</button>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>

@endsection
