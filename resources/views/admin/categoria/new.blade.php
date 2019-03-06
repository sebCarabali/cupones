@extends('layouts.master')
@section('titulo')
Crear categoria
@endsection
@section('contenido')
<div class="container">
    <div class="col-md-3">
        <aside class="sidebar-left">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li>
                    <a href="{{ route('admin.categoria.index') }}">Ver todas</a>
                </li>
                <li class="active">
                    <a href="{{ route('admin.categoria.new') }}">Registrar</a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="col-md-9">
        <div class="frm">
            <div class="frm-header">
                Registrar nueva categoria
            </div>
            <div class="frm-body">
                <form action="{{ route('admin.categoria.new') }}" method="post">
                    @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">
                        {{ $err }}
                    </p>
                    @endforeach
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nombre">Nombre</label>
                            <input type="text" required class="form-control" name="nombre" id="nombre" placeholder="Tu Nombre"
                                value="{{ old('nombre') }}">
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
@endsection
