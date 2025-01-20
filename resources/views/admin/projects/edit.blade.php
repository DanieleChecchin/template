@extends('layouts.app')

@section('title', 'Modifica Progetto')

@section('content')
    <div class="container">
        <h1 class="fw-bold">Modifica Progetto: {{ $project->name }}</h1>

        <form method="POST" action="{{ route('admin.projects.update', $project) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome del progetto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
            </div>

            <div class="mb-3">
                <label for="type_id" class="form-label">Tipo di Progetto</label>
                <select name="type_id" id="type_id" class="form-select" required>
                    <option value="">Seleziona un Tipo</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-info">Aggiorna Progetto</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection
