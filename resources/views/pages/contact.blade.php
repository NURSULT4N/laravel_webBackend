@extends('layouts.kz')

@section('content')
    <div class="container mt-4">
        <div class="row">
            @include('inc.notifications')
            <div class="container col-md-7 mx-auto">
                <form action="{{ route('contact-form') }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Name input -->
                            <div class="col">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input name="name" type="text" id="name" class="form-control" />
                        </div>
                            </div>
                        <!-- Email input -->
                            <div class="col">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input name="email" type="text" id="email" class="form-control" />
                        </div>
                            </div>
                        <!-- Subject input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="subject">Subject</label>
                            <input name="subject" type="text" id="subject" class="form-control" />
                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="message">Message</label>
                            <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                            <label class="form-check-label" for="form4Example4">
                                Send me a copy of this message
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
