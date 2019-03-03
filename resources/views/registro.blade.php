@section('titulo', 'Registro de usuario')
@extends('layout')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <h2>Registro de usuairo</h2>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('registro') }}" method="post">

                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required placeholder="Daniela" value="{{ old('nombre') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" name="apellido" required placeholder="Perez" class="form-control" value="{{ old('apeliido') }}">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="email" name="email" required placeholder="johndoe@gmail.com" class="form-control"
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="password" required placeholder="Mi password" class="form-control"
                                minlength="8">
                        </div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </div>

</div>

@endsection
