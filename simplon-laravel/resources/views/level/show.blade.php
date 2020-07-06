@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $level->id }}</div>
                <div class="card-body">
                    Vous avez souhaité afficher le level {{ $level->level_label }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection