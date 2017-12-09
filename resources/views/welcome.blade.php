@section('titulo','mi titulo')
@extends('template.main')



@section('content')

<div class="" widht="100%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" width="100%">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Este es el hola de {{ $user->name }}</h1>
                    <form action="/profile" method="post" enctype='multipart/form-data'></form>
                    <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Avatar</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control" name="avatar" value="" accept="image/*">
                            </div>
                            <button type='submit'>Subir</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
