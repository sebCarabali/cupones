@extends('layouts.master')
@section('titulo')
Asociar diseñador a aliado
@endsection

@section('contenido')
<div class="container">
    <div class="col-md-3">
        <aside class="sidebar-left">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li>
                    <a href="{{ route('admin.disenador.index') }}">Ver todos</a>
                </li>
                <li>
                    <a href="{{ route('admin.disenador.new') }}">Registrar</a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="col-md-9">
        <div class="frm">
            <div class="frm-header">
                Registrar nuevo diseñador
            </div>
            <div class="frm-body">
                <form action="{{ action('Admin\DisenadorController@doEditar', $disenador->id) }}" method="post">
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
                                value="{{ $persona->nombre }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellido</label>
                            <input type="text" required class="form-control" name="apellido" id="apellido" placeholder="Tu apellido"
                                value="{{ $persona->apellido }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Email</label>
                            <input type="email" disabled class="form-control" name="email" id="email" placeholder="mail@host.com"
                                value="{{ $persona->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="aliados" class="col-md-2">Aliados</label>
                        <select name="aliados[]" multiple id="aliados" class="form-control">
                            @foreach ($aliados as $aliado)
                            <option value="{{ $aliado->id }}" @if(in_array($aliado->id, $aliadosSeleccionados)) selected @endif>
                                {{ $aliado->nombre }}
                            </option>
                            @endforeach
                        </select>
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
    <div class="gap"></div>
</div>
@endsection
