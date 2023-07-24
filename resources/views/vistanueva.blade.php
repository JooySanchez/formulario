@extends('layout.vistapadre')

@section('contenidoPrincipal')

<h2>vista nueva 1</h2>
<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>A well-known quote, contained in a blockquote element.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>

<ul>
    @for($i=0;$i <=10;$i++)
        <li> el valor de i es {{$i}}</li>
    @endfor


    @foreach ($animales as $animal)

    <li>el animal es {{$animal}}</li>

    @endforeach
</ul>

@endsection