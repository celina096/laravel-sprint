@extends('layouts.app')

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
                    <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Editar avatar</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar" value="" accept="image/*">
                            </div>
                            <button type='submit' value="submit" name="submit">Editar</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
