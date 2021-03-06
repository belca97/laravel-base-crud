@extends('layout.base')


@section('pageTitle', 'comics')


@section('content')

<div class="container">

  <a class="btn btn-warning mt-5" href="{{route('comics.create')}}" role="button">Crea</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $comics as $comic )
          <tr>
            <th>{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>

            <td >
              <a class="btn btn-primary mt-5" href="{{route('comics.show', $comic->id)}}" role="button">Vedi</a>
            </td>
          </tr>            
          @endforeach
          
        </tbody>
      </table>
</div>

@endsection