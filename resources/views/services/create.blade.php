@extends('layouts.app')

@section('content')
<div class="container">
<h1> Add your  services listing to Ongata Rongai Online</h1>
<h2>Make your services
stand out.</h2>
<h3>Need to add or update multiple listings/branches?</h3>

<div class="card-body">
<!-- <form method="POST" action="{{ route('register') }}"> -->
 <form action="/services" enctype="multipart/form-data" method="post">
@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

    <div class="col-md-6">
        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

        @error('surname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="business_name" class="col-md-4 col-form-label text-md-right">{{ __('Business Name') }}</label>

    <div class="col-md-6">
        <input id="business_name" type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name') }}" required autocomplete="business_name" autofocus>

        @error('business_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="business_type" class="col-md-4 col-form-label text-md-right">{{ __('Business Type') }}</label>

    <div class="col-md-6">
        <input id="business_type" type="text" class="form-control @error('business_type') is-invalid @enderror" name="business_type" value="{{ old('business_type') }}" required autocomplete="business_type" autofocus>

        @error('business_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
    <div class="form-group row">
    <label for="business_phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Business Phone Number') }}</label>

    <div class="col-md-6">
        <input id="business_phone_number" type="text" class="form-control @error('business_phone_number') is-invalid @enderror" name="business_phone_number" value="{{ old('business_phone_number') }}" required autocomplete="business_phone_number" autofocus>

        @error('business_phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="mobile_phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Business Mobile Number') }}</label>

    <div class="col-md-6">
        <input id="mobile_phone_number" type="text" class="form-control @error('mobile_phone_number') is-invalid @enderror" name="mobile_phone_number" value="{{ old('mobile_phone_number') }}" required autocomplete="mobile_phone_number" autofocus>

        @error('mobile_phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="business_web_address" class="col-md-4 col-form-label text-md-right">{{ __('Business Web Address') }}</label>

    <div class="col-md-6">
        <input id="business_web_address" type="business_web_address" class="form-control @error('business_web_address') is-invalid @enderror" name="business_web_address" value="{{ old('business_web_address') }}" required autocomplete="business_web_address">

        @error('business_web_address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Business Logo') }}</label>

    <div class="col-md-6">
        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">

        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
<p>You acknowledge this information will be publicly displayed and will be used to contact you by users of these directories, who are individuals looking for the products and services you offer and suppliers (including web.com) who may wish to provide services to businesses like yours. If you ever would like to be removed from our directories you may unsubscribe at any time or review our privacy policy</p>
<h5><input type="radio"><strong>  Accept</strong></h5>




<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Add My Business') }}
        </button>
    </div>
</div>
</form>
</div>
   
</div>
          
@endsection
 