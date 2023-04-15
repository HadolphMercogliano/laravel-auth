@extends('layouts.app')

@section('title')
<div class="container">
  <div class="d-flex align-items-center justify-content-between">
    <h3 class="my-4"> Tutti i progetti</h3>

    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Nuovo progetto</a>

  </div>
</div>
    
@endsection
@section('content')

<div class="container">
  <table class="table table-dark table-striped mt-5">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Link</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->link}}</td>
            <td>
              <a href="{{ route('admin.projects.show', $project) }}">Dettagli</a>
              <a href="{{ route('admin.projects.edit', $project) }}" class="text-warning"> Mod</a>

              {{-- <form action="{{ route('projects.destroy', $song) }}" method="POST" class="text-danger d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn-destroy">Del</button>
              </form>
          </td> --}}
            </tr>
            @endforeach
        </tbody>
  </table>
  {{ $projects->links('pagination::bootstrap-5')}}
</div>
    
@endsection