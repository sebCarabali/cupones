@extends('layouts.master')
@section('titulo')
Categorias
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-pills nav-stacked nav-arrow">
                    <li class="active">
                        <a href="{{ route('admin.categoria.index') }}">Ver todas</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categoria.new') }}">Registrar</a>
                    </li>
                </ul>
            </aside>
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
                        <th scope="col">Nombres</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                    @if(count($categorias) == 0)
                    <tr>
                        <td class="td-center" colspan="4">No hay resultados para mostrar</td>
                    </tr>
                    @else
                        @foreach ($categorias as $item)
                        <tr>
                            <td>
                                {{ $item->nombre }}
                            </td>
                            <td>
                                <a href="{{ action('Admin\CategoriaController@showFrmEditar', $item->id) }}"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {!! $categorias->render() !!}
        </div>
        <div class="gap"></div>
    </div>
    @endsection
