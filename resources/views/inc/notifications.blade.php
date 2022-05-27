@if(session('success'))
    <div class="alert alert-success col-md-6 mx-auto" style="z-index: 1; text-align: center">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="container mt-4" style="z-index: 1;>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="alert alert-danger pt-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif



