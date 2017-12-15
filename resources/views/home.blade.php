@extends('template.main')
@extends('template.nav')
@section('titulo','Configuracion de Gastos')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-center">Este es el perfil de {{auth()->user()->name }}</h1>
                    <form class="text-center" action="" method="post" enctype='multipart/form-data'</form>
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                        <h2>Cambiar datos personales</h2>
                        <img src="uploads/avatars/{{auth()->user()->avatar}}" alt="" width="100px">
                        <br>
                        <label for="username">Nombre de Usuario</label>
                        <br>
                        <input id="username" type="text" name="name" value="" placeholder="{{auth()->user()->name}}">
                        <br>
                        <label for="email">E-mail</label>
                        <br>
                        <input type="email" name="email" value="" placeholder="{{auth()->user()->email}}">
                        <br>
                        <label for="oldpassword">Contraseña Actual</label>
                        <br>
                        <input id="oldpassword" type="password" name="password" value="" required>
                        <br>
                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                          <label for="avatar">Editar avatar</label>
                          <br>
                            <input class="d-inline w-25" id="avatar" type="file" class="form-control" name="avatar" value="" accept="image/*" style="display:inline;">
                          </div>
                            <button class="d-block" type='submit' value="submit" name="submit">Editar</button>

                        </form>
                </div>
            </div>
@endsection

@section('script')

@endsection
