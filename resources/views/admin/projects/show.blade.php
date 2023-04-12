@extends('layouts.app')

@section('title')
<div class="container">
  <h3 class="my-4"> Progetto</h3>
</div>

@endsection
@section('content')

<div class="container">
  <div class="row justify-content-center align-items-center g-2 mb-3">  
    <div class="card col-6 p-3">
      <div class="card-body">
        <div class="col-12">
          <img class="img-fluid mb-3" src="{{$project->link}}" alt="">
        </div>
        <div class="col-12">
          <h3 class="card-title text-center mb-4 "> {{ $project->title }}</h3>
          <p class="">{{ $project->description}}</p>
        </div>
      </div>     
    </div>
  </div>
</div>

@endsection