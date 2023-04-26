@extends('layouts.app')

@section('content')
   
  <div class="container py-5">
      <div class="row align-items-center">
          <div class="d-flex gap-2 align-items-center justify-content-end">
              <a href="{{ route('types.edit',$type) }}"><i class="fa-solid fa-pencil"></i></a>
              <form action="{{route('types.destroy', $type)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="border-0 bg-transparent">
                  <i class="text-danger fa-regular fa-trash-can"></i>
                </button>
              </form>
            </div>
          <div class="col">
              <h3>Name: {{$type->name}}</h3>
              <h5 class="type_title mb-5">ID: {{ $type->id }} </h5>
              <ul class="p-0">
                <h5>Related Projects</h5>
                @foreach ($projects as $project)
                    <li><a href="{{ route('projects.show', $project)}}">{{ $project->title }} </a> </li>    
      
                  @endforeach
              </ul>
          </div>
      </div>
  </div>

@endsection