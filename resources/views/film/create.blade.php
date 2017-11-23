@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Creating new film</div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('film.store') }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">nom : </label>
                            <div class="col-sm-9">
                                <input type="text" name="nom" value="{{ old('nom') }}" class="form-control" required>
                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-sm-3 control-label">Nom : </label>
                            <div class="col-sm-9">
                                <input type="text" name="nom" value="{{ old('nom') }}" class="form-control">
                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="auteur" class="col-sm-3 control-label">Price : </label>
                            <div class="col-sm-9">
                                <input type="text" name="auteur" value="{{ old('auteur') }}" class="form-control" required>
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('auteur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datesortie" class="col-sm-3 control-label">datesortie : </label>
                            <div class="col-sm-9">
                                <input type="text" name="datesortie" value="{{ old('datesortie') }}" class="form-control" required>
                                @if ($errors->has('datesortie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datesortie') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="disponible" class="col-sm-3 control-label">disponible : </label>
                        <div class="col-sm-9">
                            <input type="text" name="disponible" value="{{ old('disponible') }}" class="form-control" required>
                            @if ($errors->has('disponible'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('disponible') }}</strong>
                                    </span>
                            @endif
                        </div>
                </div>
                        <div class="form-group">
                            <label for="genre" class="col-sm-3 control-label">genre : </label>
                            <div class="col-sm-9">
                                <select name="genre_id" id="genre_id">
                                    @foreach($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-default">Créer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection