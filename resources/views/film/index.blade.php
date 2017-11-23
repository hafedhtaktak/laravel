@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading flex-sb-c">
                    <h3>List of films</h3>
                    <div class="button">
                        <a href=" " class="btn btn-success"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                            <th>genre</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td>{{ $film->id }}</td>
                                <td>{{ $film->nom }}</td>
                                <td>{{ $film->auteur }}</td>
                                <td>{{ $film->datesortie }}</td>
                                <td>{{ $film->datesortie }}</td>
                                <td>{{ $film->genre->nom }}</td>


                                <td class="flex-se-c">
                                    <a href=" " class="btn btn-primary">D</a>
                                    <a href=" " class="btn btn-success">U</a>
                                    <form action=" " method="post" class="btn-delete">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" type="submit">S</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/alert.js') }}"></script>
@endsection