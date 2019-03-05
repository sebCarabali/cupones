@extends('layouts.master')
@section('titulo')
Administrar aliados
@endsection

@section('contenido')

<div class="container">
    <div class="col-md-3">
        <aside class="sidebar-left">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li class="active">
                    <a href="{{ route('admin.disenador.index') }}">Ver todos</a>
                </li>
                <li>
                    <a href="{{ route('admin.disenador.new') }}">Registrar</a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="col-md-9">
        @if (session('status'))
            <p class="alert alert-success">
                {{ session('status') }}
            </p>
        @endif
        <div class="row row-wrap">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                    @if(count($disenadores) == 0)
                        <tr>
                            <td class="td-center" colspan="4">No hay resultados para mostrar</td>
                        </tr>
                    @else
                    @foreach ($disenadores as $disenador)
                        <tr>
                            <td>
                                {{ $disenador->nombre }}
                            </td>
                            <td>
                                {{ $disenador->apellido }}
                            </td>
                            <td>
                                {{ $disenador->email }}
                            </td>
                            <td>
                                <a href="{{ action('Admin\DisenadorController@showFrmEditar', $disenador->disenador->id) }}"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="gap"></div>
@endsection
