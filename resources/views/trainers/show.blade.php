@extends('layouts.app')

@section('title','Trainer')

@section('content')
<div class="container text-center">
    @include('common.succes')

    <img src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" style="height:200px; width:200px; margin: 20px;">
    <h5>{{$trainer->name}}</h5>
    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-warning">Editar</a>
    
    {!! Form::open(['route' => ['trainers.destroy', $trainer->slug],'method'=> 'DELETE']) !!}
        {!! Form::submit('Eliminar',['class' => 'btn btn-danger'])!!}
    {!! Form::close() !!}
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@endsection
