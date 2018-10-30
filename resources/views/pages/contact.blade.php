@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Site Admin can be contacted through this page.</p></div>

        <div class="card-body">


            <form action="/contact" method="post">
                {{  csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                </div>


                <div class="form-group">
                    <label for="Body">message</label>
                    <textarea name="body" class="form-control" id="Body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">submit</button>
            </form>
        </div>
    </div>

@endsection


