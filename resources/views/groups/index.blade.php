@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td width="90%">Naam</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $group)
                            <tr>
                                <td>{{ $group->name }}</td>
                                <td><a href="{{ route('show-groep', ['id' => $group->id]) }}" class="btn btn-warning"><i class="material-icons">mode_edit</i></button></td>
                                <td>
                                    <form action="{{ route('delete-groep', ['id' => $group->id]) }}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" type="submit"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createGroup">
                    <i class="material-icons">add</i>
                </button>

                <div id="createGroup" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Groep toevoegen</h5>
                            </div>
                            <form action="{{ route('create-groep', ['id' => $group->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group{{ $errors->has('pers_id') ? ' has-error' : '' }}">
                                        <label for="pers_id" class="col-md-4 control-label">Personeels nummer</label>

                                        <div class="col-md-6">
                                            <input id="pers_id" type="text" class="form-control" name="pers_id" value="{{ old('pers_id') }}" required autofocus>

                                            @if ($errors->has('pers_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('pers_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Voor- en achternaam</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Email adres</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Bevestig wachtwoord</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Groep aanmaken</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
