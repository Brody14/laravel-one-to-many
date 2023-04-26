@extends('layouts.app')

@section('content')

<div class="container py-5 text-center">
    <h1>All Types</h1>
    <div class="d-flex justify-content-end py-2 gap-3">
      <a class="btn btn-outline-success" href="{{ route('types.create')}}"> Add Type </i></a>
    </div>
</div>

<div class="container py-2">
    <table class="table w-25 mx-auto">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col" class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($types as $type)
              <tr>
                <td>
                    <a href="{{ route('types.show', $type) }}">{{ $type->name }}</a>
                </td>
                <td>
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
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection