@extends('layouts.kz')

@section('content')
    <div>@include('inc.notifications')</div>
    <h1 style="text-align: center; margin-top: 15px">All Messages</h1>
    @foreach($data as $el)
        <div class="container col-md-8 mx-auto mt-3">
            <div class="alert alert-info ">
                <h3>{{ $el->subject }}</h3>
                <p>{{ $el->message }}</p>
                <p>{{ $el->name }}</p>
                <p>{{ $el->email }}</p>
                <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Details</button></a>
            </div>
        </div>
    @endforeach
@endsection
