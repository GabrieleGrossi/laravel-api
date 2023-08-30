@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">
                    {{$project->type->name}}
                </h5>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $project->name}}
                    </h5>
                    @if (count ($project->technologies)> 0)
                        <h6 class="card-header">
                            @foreach ($project->technologies as $technology)
                                {{ $technology->name }} -- 
                            @endforeach
                        </h6>
                    @endif
                    <p class="card-text">
                        {{ $project->goal}}
                    </p>
                    <a href="#" class="btn btn-primary">
                        {{ $project->link}}
                    </a>
                    <div>
                        @if (str_starts_with($project->image, 'http' ))
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="mt-3">
                        @else
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="mt-3">
                        @endif
                    </div>
                    <p class="mt-3">
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <a href="{{ route('admin.projects.index')}}" class="btn btn-sm btn-success">
                            Click here to back home
                        </a>
                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
