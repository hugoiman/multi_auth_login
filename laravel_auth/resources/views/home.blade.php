@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi, {{ Auth::user()->name }}  You are logged in!
                    <p>
                      Email : {{ Auth::user()->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection