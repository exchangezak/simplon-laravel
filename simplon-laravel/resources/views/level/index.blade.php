@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($levels as $level)
            <div class="card">
                <div class="card-header">{{ $level->id }}</div>
                <div class="card-body">
                    {{ $level->level_label }}
                    <div class="row align-items-center">
                        <a href="{{ route('levels.show', ['level' => $level])}}" class="btn btn-dark">View</a>
                        <a href="{{ route('levels.edit', ['level' => $level])}}" class="btn btn-success">Edit</a>

                        <form method="POST" action="{{action('LevelController@destroy', ['level'=> $level])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-md btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <a href="{{route('levels.create')}}" class="btn btn btn-success">Add level</a>
        </div>
    </div>
</div>
@endsection