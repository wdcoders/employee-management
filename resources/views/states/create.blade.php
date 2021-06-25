@extends('layouts.main')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb be-main-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('states.index') }}">States</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add State</li>
        </ol>
    </nav>

    <div class="card be-content-inner">
        <h5 class="card-header be-content-header">
            {{ __('Add State') }}
        </h5>
        <div class="card-body be-content-body">
            <form method="POST" action="{{ route('states.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="country_id" class="col-md-2 col-form-label text-md-right">{{ __('Country') }}</label>

                    <div class="col-md-3">
                        <select class="custom-select @error('country_id') is-invalid @enderror" id="country_id"
                            name="country_id" value="{{ old('country_id') }}" required autocomplete="country_id"
                            autofocus>
                            <option selected>Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>

                        @error('country_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('State Name') }}</label>

                    <div class="col-md-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
