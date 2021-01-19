@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header align-content-center">Student Infos</div>
                    <div class="card-body">
                        <form method="GET" action="{{route('student')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="fname" class="col-md-4 col-form-label text-md-right">First Name:</label>

                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        name="fname"
                                        id="fname"
                                        class="form-control"
                                        @error('fname')is-valid @enderror
                                        value="{{old('fname')}}"
                                        placeholder="First name"
                                        required
                                        autofocus>
                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                             </div>

                            <div class="form-group row">
                                <label for="sname" class="col-md-4 col-form-label text-md-right">Second Name:</label>

                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        name="sname"
                                        id="sname"
                                        class="form-control"
                                        @error('sname')is-valid @enderror
                                        value="{{old('sname')}}"
                                        placeholder="Second name"
                                        required
                                        autofocus>
                                    @error('sname')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>

    </div>
@endsection
