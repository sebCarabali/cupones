@extends('layouts.master')
@section('titulo')
Compras
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2 class="title-detalle-compra">
                Detalle Compra
            </h2>
            <ul class="ul">
                <li>
                    fecha: {{ $compra->fecha_compra }}
                </li>
                <li>
                    total: ${{ $compra->total }}
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Cupón</th>
                        <th scope="col">Descuento</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                    @if(count($detalleCompra) == 0)
                    <tr>
                        <td class="td-center" colspan="4">No hay resultados para mostrar</td>
                    </tr>
                    @else
                    @foreach ($detalleCompra as $item)
                    <tr>
                        <td>
                            {{ $item->cantidad}}
                        </td>
                        <td>
                            ${{ $item->valor }}
                        </td>
                        <td>
                            {{ $item->titulo }}
                        </td>
                        <td>
                            {{ $item->porcentaje_descuento }}%
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            {!! $detalleCompra->render() !!}
        </div>
        <div class="gap"></div>
    </div>
    @endsection
