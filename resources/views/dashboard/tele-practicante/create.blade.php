@extends('dashboard.master')

@section('contenido')

    @include('dashboard.tele-practicante.partials.validation-errors')

    <h1><i class="fas fa-user-circle"></i> Perfil de TelePracticante</h1>
    <form action="{{ route('tele-practicante.store') }}" method="POST">

        @csrf

        <h2>Información Personal</h2>

        <div class="form-group">
            <label>R.U.N. - DV</label>
            <input class="form-control" type="text" name="run">

            @error('run')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Nombre completo</label>
            <input class="form-control" type="text" name="nombre_completo">

            @error('nombre_completo')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email">

            @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input class="form-control" type="text" name="telefono">

            @error('telefono')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Región</label>
            <input class="form-control" type="text" name="region_id">

            @error('region_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Comuna</label>
            <input class="form-control" type="text" name="comuna_id">

            @error('comuna_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <br>

        <div class="form-group">
            <label>¿Internet fijo?</label>
            <input class="form-control" type="text" name="internet_fijo">

            @error('internet_fijo')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>¿Equipo computacional propio?</label>
            <input class="form-control" type="text" name="equipo_computacional">

            @error('equipo_computacional')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <!--
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="internet-fijo">
                <label for="internet-fijo" class="custom-control-label">¿Internet fijo?</label>
            </div>
            <br>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="equipo-computacional">
                <label for="equipo-computacional" class="custom-control-label">¿Equipo computacional propio?</label>
            </div>
            <br> 
        -->

        <h2>Información Académica</h2>

        <div class="form-group">
            <label>Nivel educacional</label>
            <input class="form-control" type="text" name="nivel_educacional_id">

            @error('nivel_educacional_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Carrera</label>
            <input class="form-control" type="text" name="carrera_id">

            @error('carrera_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Institución</label>
            <input class="form-control" type="text" name="institucion_id">

            @error('institucion_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <h2>Práctica Profesional</h2>
        <br>

        <div class="form-group">
            <label>Tipo de práctica</label>
            <input class="form-control" type="text" name="tipo_practica_id">

            @error('tipo_practica_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <!--
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="radio-tipo-practica-1" name="radio-tipos-practica">
                <label for="radio-tipo-practica-1" class="custom-control-label">Opción práctica A</label>
            </div>
            <br>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="radio-tipo-practica-2" name="radio-tipos-practica">
                <label for="radio-tipo-practica-2" class="custom-control-label">Opción práctica B</label>
            </div>
            <br>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="radio-tipo-practica-3" name="radio-tipos-practica">
                <label for="radio-tipo-practica-3" class="custom-control-label">Opción práctica C</label>
            </div>
            <br>
        -->

        <div class="form-group">
            <label>Horas requeridas</label>
            <input class="form-control" type="text" name="cantidad_horas">

            @error('cantidad_horas')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label>Duración en meses</label>
            <input class="form-control" type="text" name="cantidad_meses">

            @error('cantidad_meses')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <input type="submit" value="Guardar" class="btn btn-primary">

    </form>

@endsection
