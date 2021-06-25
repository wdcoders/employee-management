@extends('layouts.main')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb be-main-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cities.index') }}">Cities</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit City</li>
        </ol>
    </nav>

    <div class="card be-content-inner">
        <h5 class="card-header be-content-header">
            {{ __('Edit City') }}
        </h5>
        <div class="card-body be-content-body">
            <form method="POST" action="{{ route('cities.update', $city->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="state_id" class="col-md-2 col-form-label text-md-right">{{ __('State') }}</label>

                    <div class="col-md-3">
                        <select class="custom-select @error('state_id') is-invalid @enderror" id="state_id" name="state_id"
                            value="{{ old('state_id') }}" required autocomplete="state_id" autofocus>
                            <option selected>Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}"
                                    {{ $city->state->id === $state->id ? 'selected' : '' }}>{{ $state->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('state_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('City Name') }}</label>

                    <div class="col-md-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name', $city->name) }}" required autocomplete="name" autofocus>

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
