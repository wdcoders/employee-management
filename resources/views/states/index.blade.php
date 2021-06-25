@extends('layouts.main')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb be-main-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">States</li>
        </ol>
    </nav>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="card be-content-inner">
        <h5 class="card-header be-content-header">
            {{-- <span class="float-left">Users</span> --}}
            <a href="{{ route('states.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus-circle"></i>
                Add State
            </a>
        </h5>
        <div class="card-body be-content-body">

            <form class="form-inline" method="GET" action="{{ route('states.index') }}">
                <label class="sr-only">Name</label>
                <input type="text" name="search" class="form-control mb-2 mr-sm-2" placeholder="Name">

                <button type="submit" class="btn btn-primary mb-2">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Country Code</th>
                        <th scope="col">State Name</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($states as $state)
                        <tr>
                            <th scope="row">{{ $state->id }}</th>
                            <td>{{ $state->country->country_code }}</td>
                            <td>{{ $state->name }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('states.edit', $state->id) }}" class="btn btn-success mx-1">Edit</a>

                                    <form action="{{ route('states.destroy', $state->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
