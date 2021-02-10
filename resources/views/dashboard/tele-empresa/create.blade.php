@extends('dashboard.master')

@section('contenido')

    <h1><i class="fas fa-user-circle"></i> Perfil de TeleEmpresa</h1>
    <form action="{{ route('tele-empresa.store') }}" method="POST">

        @csrf

        <h2>Información General</h2>

        <div class="form-group">
            <label>R.U.N. - DV</label>
            <input class="form-control" type="text" name="run">
        </div>

        <div class="form-group">
            <label>Razón social</label>
            <input class="form-control" type="text" name="razon-social">
        </div>

        <div class="form-group">
            <label>Nombre ficticio</label>
            <input class="form-control" type="text" name="nombre-ficticio">
        </div>

        <div class="form-group">
            <label>Área</label>
            <input class="form-control" type="text" name="area">
        </div>

        <div class="form-group">
            <label>Giro</label>
            <input class="form-control" type="text" name="giro">
        </div>

        <div class="form-group">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion">
        </div>

        <div class="form-group">
            <label>Fecha de inicio de actividades</label>
            <input class="form-control" type="text" name="fecha-inicio-actividades">
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

        <div class="form-group">
            <label>Dirección</label>
            <input class="form-control" type="text" name="direccion">
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">

    </form>

@endsection
