@extends('layouts.app')

@section('page-title', 'Show')

@section('main-content')

    <h1 class="text-center text-dark text-uppercase">
        Single Technology
    </h1>
    <div class="row">
        
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h4>
                            {{ $technology->name }}
                        </h4>
                        <h5>
                            {{ $technology->industry }}
                        </h5>
                        
                    </div>
                </div>
            </div>
        
    </div>
@endsection
