@extends('layouts.master')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <h2>Login de usuario</h2>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
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
                        <input type="submit" value="Ingresar" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </div>
</div>
@endsection
