<!-- Sto estendendo il layout creato in "app.blade.php" -->
@extends('layouts.app')

<!-- Sintassi per passare solo del testo nel segnaposto 'title' ereditato da layout in App -->
@section('title', 'Laravel Comics')

<!-- Sto creando il contenuto da mettere dentro il segnaposto 'content' ereditato da layout in App -->
@section('content')
<main>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <div class="ps_card">
          <img src="{{ Vite::asset( $comics['thumb']) }}" alt="">

          <span>{{ $comics['title']}}</span>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection