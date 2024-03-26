@extends('layout.app')

@section('main-content')
    <section>
        <div class="container">
            <h1>Crea nuovo fumetto</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title">
                <label for="description">Descrizione</label>
                <textarea id="description" name="description"></textarea>
                <button type="submit">Salva</button>
            </form>
        </div>
    </section>
@endsection

