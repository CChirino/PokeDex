<!--Validations-->

@if ($errors-> any())
<div class="alert alert-danger mt-2">
    <ul>
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach

    </ul>
</div>
@endif