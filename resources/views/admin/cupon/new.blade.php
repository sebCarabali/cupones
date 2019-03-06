@extends('layouts.master')
@section('titulo', 'Registro nuevo aliado')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-pills nav-stacked nav-arrow">
                    <li>
                        <a href="{{ route('admin.cupon.index') }}">Ver todos</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('admin.cupon.new') }}">Registrar</a>
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
                    <form action="{{ route('admin.cupon.new') }}" method="post">
                        @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">
                            {{ $err }}
                        </p>
                        @endforeach
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="titulo">Título</label>
                                <input type="text" required class="form-control" name="titulo" id="nombre" placeholder="Título del cupón"
                                    value="{{ old('titulo') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="porcentaje_descuento">Porcentaje de descuento</label>
                                <input type="number" min="1" max="100" required class="form-control" name="porcentaje_descuento"
                                    id="porcentaje_descuento" placeholder="Número entre 1 y 100" value="{{ old('porcentaje_descuento') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" min="1" class="form-control" name="cantidad" id="cantidad"
                                    placeholder="Cupones disponibles" value="{{ old('cantidad') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    @foreach ($categorias as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fecha_caducidad">Fecha de caducidad</label>
                                <input type="date" class="form-control" class="datepicker" name="fecha_caducidad" min="{{ date('Y-m-d') }}"
                                    id="fecha_caducidad">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="aliado">Aliado</label>
                                <select name="aliado" id="aliado" class="form-control">
                                    @foreach ($aliados as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nombre }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="condiciones">Condiciones</label>
                                <textarea name="condiciones" id="condiciones" placeholder="Escriba las condiciones de este cupón"
                                    class="form-control" cols="30" rows="10">{{ old('condiciones') }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" required cols="30" placeholder="Escribe las condiciones del cupón"
                                    rows="10" class="form-control">{{ old('descripcion') }}</textarea>
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
