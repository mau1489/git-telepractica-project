@extends('dashboard.master')

@section('contenido')

    <h1><i class="fas fa-user-circle"></i> Perfil de TeleInstitucion</h1>
    <form action="{{ route('tele-institucion.store') }}" method="POST">

        @csrf

        <h2>Información General</h2>

        <div class="form-group">
            <label>R.U.N. - DV</label>
            <input class="form-control" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>

        <div class="form-group">
            <label>Sigla</label>
            <input class="form-control" type="text" name="sigla">
        </div>

        <h2>Contacto</h2>

        <div class="form-group">
            <label>Página web</label>
            <input class="form-control" type="text" name="web">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email">
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input class="form-control" type="text" name="telefono">
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">

    </form>

@endsection
