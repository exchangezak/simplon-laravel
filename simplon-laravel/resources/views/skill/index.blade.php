@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($skills as $skill)
            <div class="card">
                <div class="card-header">{{ $skill->name }}</div>

                <div class="card-body">  
                    {{  $skill->label }}<br> 
                    <div class="row align-items-center">
    <a href="{{route('skills.show', ['skill'=> $skill])}}"   class="btn btn-md btn-dark">View</a> 

                 <a href="{{route('skills.edit', ['skill'=> $skill])}}"  class="btn btn-md btn-success">Edit</a> <br>

                 {{-- 
                        <a href="{{action('SkillController@destroy', ['skill'=> $skill])}}"  class="btn btn-md btn-danger">Delete</a>
                        --}}

                    <form  method="POST" action="{{action('SkillController@destroy', ['skill'=> $skill])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-md btn-danger">Delete</button>
                        </div>
                    </form>

                </div>
            </div>
            @endforeach
            <a href="{{route('skills.create')}}"  class="btn btn-sm btn-outline-success">Add skill</a>
        </div>
    </div>
</div>

@endsection