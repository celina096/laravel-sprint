@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrarse</div>

                <div class="panel-body">
                    <form  id="formRegistro" class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control"  name="name" value="{{ old('name') }}" autofocus>

                                    <span class="help-block"  style="color:red" id="errorName">
                                @if ($errors->has('name'))
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"   >

                                    <span class="help-block" style="color:red"  id="errorEmail">
                                @if ($errors->has('email'))
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="rol" class="col-md-4 control-label">Rol</label>
                            <div class="col-md-6">
                              <select id="rol" class="form-control" name="rol"   >
                                <option value="administrador">ADMINISTRADOR</option>
                                <option value="liquidador">LIQUIDADOR</option>
                                <option value="asistente">ASISTENTE</option>
                              </select>
                                    <span class="help-block"  style="color:red" id="errorRol">
                              @if ($errors->has('rol'))
                                        <strong>{{ $errors->first('rol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"   >

                                    <span class="help-block" style="color:red"  id="errorPassword">
                                @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="button" type="button" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                        <p class="form-message"></p>
                        <a class="btn btn-link" href="/login">¿Ya estás registrado?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
            var name1 = document.getElementById('name');
            var email = document.getElementById('email');
            var rol1 = document.getElementById('rol');
            var password = document.getElementById('password');
            var password_confirm = document.getElementById('password-confirm');
            var button = document.getElementById('button');
            var re =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var error = 0;

            button.addEventListener('click',function() {
                error = 0;

            if (name1.value == "") {
                error++
                document.querySelector('#errorName').innerText="Debe completar el nombre";
            } else {
                document.querySelector('#errorName').innerText= "";
            }

            if (email.value=="") {
                error++
                document.querySelector('#errorEmail').innerText="Complete email";
            }else if(email.value.length > 100) {
                error++
                document.querySelector('#errorEmail').innerText='El email es muy largo';
            } else if (!re.test(email.value)) {
                error++
                document.querySelector('#errorEmail').innerText= "El email no es valido.";
            } else {
                document.querySelector('#errorEmail').innerText= "";
            }


            if (password.value == "") {
                error++
                document.querySelector('#errorPassword').innerText = "Complete la contraseña"
            } else if (password.value.length < 6) {
                error++
                document.querySelector('#errorPassword').innerText = "La contraseña debe ser mayor a 6 caracteres";
            } else if(password.value!==password_confirm.value){
                error++
                document.querySelector('#errorPassword').innerText = "Las contraseñas no coinciden";
            } else{
                document.querySelector('#errorPassword').innerText = "";
            }

            if (error == 0) {
                document.querySelector('#formRegistro').submit();
            }
            });
  </script>
@endsection
