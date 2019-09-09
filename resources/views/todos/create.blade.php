@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')
    <h1 class="text-center my-5">Create a Todo</h1>
    <div class="row justify-content-center">
        <div class="col md-8">
            <div class="card card-default">
                <div class="card-header">Plan Your Day</div>
                <div class="card-body">
                    <form action="/store-todo" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <textarea name="description" placeholder="Description" cols="5" rows="5"
                                      class="form-control"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                Save Todo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
