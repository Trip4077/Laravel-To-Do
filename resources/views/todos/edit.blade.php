@extends('layouts.app');

@section('content')
    <h1 class="text-center">Edit Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">Edit Todo</div>

                <div class="card-body">

                    @if($errors->any())

                        <div class="alert alert-danger">
                            <ul class="list-group">

                                @foreach($errors->all() as $error)

                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>
                        </div>

                    @endif

                    <form action="/update-todos" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                            <input type="text" class="form-control" placeholder="name" name="name" value="{{ $todo->name }}">
                            <textarea name="description" 
                                      placeholder="description..." 
                                      id="description" 
                                      cols="5" 
                                      rows="5" 
                                      class="form-control"

                            >{{ $todo->description }}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Save Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection