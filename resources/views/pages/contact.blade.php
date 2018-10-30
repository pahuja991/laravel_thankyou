@extends('layouts.default')

@section('content')

    <h1>Contact</h1>
    <p class="lead">Site Admin can be contacted through this page.</p>

    <form action="/contact" method="post">
        {{  csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="Body">message</label>
            <textarea name="body" class="form-control" id="Body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">submit</button>
    </form>

@endsection


