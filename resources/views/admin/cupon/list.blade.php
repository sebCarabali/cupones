@extends('layouts.master')
@section('titulo')
Categorias
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li class="active">
                    <a href="{{ route('admin.cupon.index') }}">Ver todos</a>
                </li>
                <li>
                    <a href="{{ route('admin.cupon.new') }}">Registrar</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            @if(session('status'))
            <p class="alert alert-success">
                {{ session('status') }}
            </p>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Vence</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Aliado</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                    @if(count($cupones) == 0)
                    <tr>
                        <td class="td-center" colspan="4">No hay resultados para mostrar</td>
                    </tr>
                    @else
                    @foreach ($cupones as $item)
                    <tr>
                        <td>
                            {{ $item->titulo }}
                        </td>
                        <td>
                            {{ $item->fecha_caducidad }}
                        </td>
                        <td>
                            {{ $item->cantidad }}
                        </td>
                        <td>
                            {{ $item->aliado->nombre }}
                        </td>
                        <td>
                            {{ $item->precio }}
                        </td>
                        <td>
                            {{ $item->categoria->nombre }}
                        </td>
                        <td>
                            <a href="{{ action('Admin\CuponController@showFrmEditar', $item->id) }}"><i class="fa fa-edit"></i>
                                Editar</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            {!! $cupones->render() !!}
        </div>
        <div class="gap"></div>
    </div>
    @endsection
