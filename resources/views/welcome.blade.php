@section('titulo','mi titulo')
@extends('template.main')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <img src="uploads/avatars/{{$user->avatar}}" alt="" width="100px">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Este es el perfil de {{ $user->name }}</h1>
                    <form action="/profile" method="post" enctype='multipart/form-data'</form>
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Editar avatar</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar" value="" accept="image/*">
                            </div>
                        <h2>Cambiar datos personales</h2>
                        <label for="username">Nombre de Usuario</label>
                        <br>
                        <input id="username" type="text" name="usuario" value="" placeholder="">
                        <br>
                        <label for="email">E-mail</label>
                        <br>
                        <input type="email" name="email" value="" placeholder="">
                        <br>
                        <label for="oldpassword">Contraseña Actual</label>
                        <br>
                        <input id="oldpassword" type="password" name="clave" value="" required>
                        <br>
                        <label for="password">Nueva Contraseña</label>
                        <br>
                        <input id="password" type="password" name="claveNueva" value="">
                            <button type='submit' value="submit" name="submit">Editar</button>
                        </div>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
