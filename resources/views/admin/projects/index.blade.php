@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic text-decoration-underline"> Projects list</h1>
            </div>
            <div class="col-12">
                <div class="my-3">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create a new Project</a>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name of project</th>
                        <th>Type</th>
                        <th>Technology</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td> {{ $project->id }} </td>
                            <td> {{ $project->name }} </td>
                            <td>{{ $project->type ? $project->type->name : 'N/A' }}</td>
                            <td> {{ $project->technology ? $project->technology->name : 'N/A' }} </td>
                            <td>
                                <a class="btn btn-sm btn-info"
                                    href="{{ route('admin.projects.show', $project->id) }}">Show</a>
                                <a href="{{ route('admin.projects.edit', $project) }}"
                                    class="btn btn-warning btn-sm">Modifica</a>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No projects available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
