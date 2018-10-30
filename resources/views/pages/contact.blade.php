@extends('layouts.default')

@section('content')


    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>This is a contact page</h1>
            <p class="lead">please use this form to contact site manager.</p></div>

        <div class="card-body">


            <form action="/contact" method="POST" action={{route('contact.store')}}">
                {{csrf_field()}}
                    <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
    </div>
@endsection