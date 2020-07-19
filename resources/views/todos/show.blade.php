@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">{{$todo->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
                <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm mt-2">Edit this todo</a>
                <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm mt-4">Delete this todo</a>

            </div>
        </div>
    </div>

@endsection


