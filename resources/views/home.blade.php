@extends('layout.sidebar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dfslldP5kM" framebrder="0" allowfullscreen></iframe>
    </div>
</div>
@endsection
