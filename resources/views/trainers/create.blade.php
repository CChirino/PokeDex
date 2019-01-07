@extends('layouts.app')

@section('title','Trainer Create')

@section('content')
<div class="container text-center">
    @include('common.errors')

<!--Laravel Collective-->
    {!! Form::open(['route'=>'trainers.store', 'method'=> 'POST', 'files'=>true]) !!}

    @include('trainers.form')

    {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}

    {!! Form::close()!!}
</div>
<!--<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
              <label for="">Avatar</label>
              <input type="file" name="avatar">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
  
  </form>
  -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@endsection
