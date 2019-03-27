@extends('layouts.master')
@section('titulo')
Compras
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <!--
                <li class="active">
                    <a href="#">Ver todos</a>
                </li>
                <li>
                    <a href="#">Registrar</a>
                </li>-->
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
                        <th scope="col">Total</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                    @if(count($compras) == 0)
                    <tr>
                        <td class="td-center" colspan="4">No hay resultados para mostrar</td>
                    </tr>
                    @else
                    @foreach ($compras as $item)
                    <tr>
                        <td>
                                {{ $item->total}}
                            </td>
                        <td>
                            {{ $item->fecha_compra }}
                        </td>
                        <td>
                            <a href="{{ route('admin.compra.detalle', $item->id) }}"><i class="fa fa-edit"></i>
                                Editar</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            {!! $compras->render() !!}
        </div>
        <div class="gap"></div>
    </div>
    @endsection
