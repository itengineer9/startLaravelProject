@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Infos your Offer</div>
                    <div class="card-body">

                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                            <br>
                         @endif
                        <form method="POST" action="{{route('offers.storeData')}}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-4 col-form-label text-md-left" for="name">Offer Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" placeholder="Offer Name">
                                    @error('name')
                                    <small class="form-text text-danger">The Name is required</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-form-label text-md-left" for="prise">Offer Price</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="prise" placeholder="Offer Price">
                                    @error('prise')
                                    <small class="form-text text-danger">The Price is required</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 col-form-label text-md-left"  for="details">Offer Details</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="details"placeholder="Offer Details">
                                    @error('details')
                                    <small class="form-text text-danger">The Details is required</small>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" >Save Offer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
