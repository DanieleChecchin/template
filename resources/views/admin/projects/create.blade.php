@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea un nuovo progetto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del progetto</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label text-light">Tipologia del Progetto</label>
                        <select name="type_id" id="type_id" class="form-select" required>
                            <option value="">Seleziona un Tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tecnologia del Progetto</label>
                        @foreach ($technologies as $technology)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="technologies[]"
                                    value="{{ $technology->id }}" id="technology-{{ $technology->id }}"
                                    {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                                <label class="form-check-label"
                                    for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-success">Crea il nuovo Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
