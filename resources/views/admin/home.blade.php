@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div>
                <p>
                    Press here to see all the project i made
                </p>
                <a href="{{ route('admin.projects.index')}}" class="btn btn-sm btn-success">
                    Click here
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
