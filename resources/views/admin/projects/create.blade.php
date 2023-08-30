@extends('layouts.app')

@section('content')
<div class="container" id="posts-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="name" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" id="name" placeholder="Insert your project's name" name="name" value="{{old('name', '')}}">
                </div>

                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="type_id" class="form-label">
                        Type
                    </label>
                    <select class="form-select" id="type_id" name="type_id">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @error('goal')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="goal" class="form-label">
                        Goal
                    </label>
                    <input type="text" class="form-control" id="goal" placeholder="Insert the project's goal" name="goal" value="{{old('goal', '')}}">
                </div>

                @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="link" class="form-label">
                        Link
                    </label>
                    <textarea class="form-control" id="link" rows="1" name="link" value="{{old('link', '')}}">
                    </textarea>
                </div>

                @error('technology_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="technologies" class="form-label">
                        Technology
                    </label>

                    <div>
                        @foreach ($technologies as $technology)
                            <input type="checkbox" name="technology[]" class="form-check-input" id="technology" value="{{ $technology->id }}" @if( in_array($technology->id, old('$technology', []))) checked @endif>
                            <label for="technology" class="form-check-label me-3">
                                {{ $technology->name }}
                            </label>
                        @endforeach
                    </div>
                </div>

                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-5">
                    <label for="image" class="form-label">
                        Image
                    </label>
                    <input type="file" class="form-control" id="image" placeholder="https://ginetto-va-in-campagna-col-cappello.jpg" name="image" value="{{old('image', '')}}">
                </div>

                <div class="mb-3">
                    <button type="submit" class="me-3">
                        Add new project
                    </button>
                    <button type="reset">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection