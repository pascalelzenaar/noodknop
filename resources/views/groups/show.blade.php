@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <h1>{{ $group->name }}</h1>
                <div class="update-form">
                	<form action="{{ route('update-groep', ['id' => $group->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Locatie</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                   

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Pas aan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>
@endsection
