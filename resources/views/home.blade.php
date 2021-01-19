@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header row">
                     <p>Dashboard </p>
                    <p>(  You are logged in!)</p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        @include('layouts.bootstraps')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
