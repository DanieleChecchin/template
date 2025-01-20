@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic">
                    Project Show
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                ID progetto: {{ $project->id }}
                            </td>
                            <td>
                                Nome del progetto: {{ $project->name }}
                            </td>
                            <td>
                                Tipologia del progetto:
                                {{ $project->type ? $project->type->name : 'Nessuna tipologia associata' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
