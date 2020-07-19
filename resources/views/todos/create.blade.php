@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">

                    <form action="/store-todo" method="post">

                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                            @error('name')
                            <div class="text-center text-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" cols="5" rows="10" placeholder="description"></textarea>
                            @error('description')
                            <div class="text-center text-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
