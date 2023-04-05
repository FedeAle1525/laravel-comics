<!-- Sto estendendo il layout creato in "app.blade.php" -->
@extends('layouts.app')

<!-- Sintassi per passare solo del testo nel segnaposto 'title' ereditato da layout in App -->
@section('title', 'Laravel Comics')

<!-- Sto creando il contenuto da mettere dentro il segnaposto 'content' ereditato da layout in App -->
@section('content')
<!-- Recupero il dato passato nella View dalla Rotta -->
<h1>{{ $title }}</h1>

<div>Lista Film</div>
@endsection