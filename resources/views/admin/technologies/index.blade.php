@extends('layouts.app')

@section('page-title', 'Index')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
        Technologies
    </h1>
    <div class="row">
        @foreach ($technologies as $technology)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <span>
                        {{ $technology->id }}
                        </span>
                        <h4>
                            {{ $technology->name }}
                        </h4>
                        <h5>
                            {{ $technology->industry }}
                        </h5>
                        
                        <a href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}" class="btn btn-success">
                            Mostra
                        </a>
                        <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">
                            Aggiungi
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
