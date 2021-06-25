@extends('layouts.main')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb be-main-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('countries.index') }}">Countries</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Country</li>
        </ol>
    </nav>

    <div class="card be-content-inner">
        <h5 class="card-header be-content-header">
            {{ __('Edit Country') }}
        </h5>
        <div class="card-body be-content-body">
            <form method="POST" action="{{ route('countries.update', $country->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="country_code"
                        class="col-md-2 col-form-label text-md-right">{{ __('Country Code') }}</label>

                    <div class="col-md-3">
                        <input id="country_code" type="text"
                            class="form-control @error('country_code') is-invalid @enderror" name="country_code"
                            value="{{ old('country_code', $country->country_code) }}" required autocomplete="country_code"
                            autofocus>

                        @error('country_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Country Name') }}</label>

                    <div class="col-md-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name', $country->name) }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-3 offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
