@extends('layouts.kz')

@section('content')
    <h1 style="text-align: center; margin-top: 15px">{{$data->subject}}</h1>
        <div class="container col-md-8 mx-auto mt-3">
            <div class="alert alert-info ">
                <h3>{{ $data->subject }}</h3>
                <p>{{ $data->message }}</p>
                <p>{{ $data->name }}</p>
                <p>{{ $data->email }}</p>
                <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Redactor</button></a>
            </div>
        </div>
@endsection
