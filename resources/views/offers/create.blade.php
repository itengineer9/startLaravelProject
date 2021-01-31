<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>  -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item active">
                    <a rel="alternate" class="nav-link"  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }} </a>
                </li>
            @endforeach

        </ul>
    </div>
</nav>

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
                    <form method="POST" action="{{route('offers.store')}}">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 col-form-label text-md-left" for="name">Offer Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Offer Name">
                                @error('name')
                                <small class="form-text text-danger">{{__("messages.offer name required")}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-form-label text-md-left" for="prise">Offer Price</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prise" placeholder="Offer Price">
                                @error('prise')
                                <small class="form-text text-danger">{{__("messages.offer price required")}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-md-4 col-form-label text-md-left"  for="details">Offer Details</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="details" placeholder="Offer Details">
                                @error('details')
                                <small class="form-text text-danger">{{__("messages.offer details required")}}</small>
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
</body>
</html>
