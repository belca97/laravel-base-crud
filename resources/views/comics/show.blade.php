@extends('layout.base')


@section('pageTitle') {{$comics->title}} @endsection


@section('content')

        <div class="container">
            <h1>{{$comics->title}}</h1>

            <div><strong>Tipo:</strong> {{$comics->description}}</div>
            <span class="mt-5 d-block"> Prezzo: {{$comics->price}}</span>
            <span class="mt-3 d-block">Tipo: {{$comics->type}}</span>
            <span class="mt-3 d-block">Serie: {{$comics->series}}</span>


            
            <a class="btn btn-primary mt-5" href="{{route('comics.index')}}" role="button">Torna alla lista</a>
        </div>


@endsection