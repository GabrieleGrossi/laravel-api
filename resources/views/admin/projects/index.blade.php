@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            Name
                        </th>
                        <th scope="col">
                            Goal
                        </th>
                        <th scope="col">
                            Link
                        </th>
                        <th scope="col">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <th>
                            {{ $project->name}}
                        </th>
                        <td>
                            {{ $project->goal}}
                        </td>
                        <td>
                            {{ $project->link}}
                        </td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-success">
                                View
                            </a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>
                            <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $projects->links() }}

            <a href="{{route('admin.projects.create', $projects)}}" class="btn btn-sm btn-success">
                Add new projects
            </a>
        </div>
    </div>
</div>
@endsection
