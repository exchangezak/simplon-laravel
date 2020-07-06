@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit a level') }} (level label {{$level->level_label}}) </div>

                <div class="card-body">
                    <form method="POST"  action="{{route('levels.update',$level)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="level_label" class="col-md-4 col-form-label text-md-right">{{ __('level_label') }}</label>

                            <div class="col-md-6">
                                <input id="level_label" type="text" class="form-control @error('level_label') 
                                        is-invalid @enderror" name="level_label" value="{{ $level->level_label }}" 
                                            required autocomplete="name" autofocus>

                                @error('level_label')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save level') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
