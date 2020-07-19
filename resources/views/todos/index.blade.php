@extends('layouts.app')

@section('content')
    <h1 class="text-center"> TODO APP</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <div class="contain">
                                <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                                </div>
                                @if(!$todo->completed)
                                    <div class="contain">

                                    <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm mr-3 float-right"> To Complete</a>
                                        </div>

                                        @else
                                    <div class="contain">

                                    <a href="/todos/{{$todo->id}}/complete" class="btn btn-success btn-sm mr-3 float-right">Completed</a>
                                    </div>

                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
