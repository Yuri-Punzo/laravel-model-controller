<!-- 
    CONSEGNA:
Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1 - Create un nuovo progetto Laravel 9
2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
3 - Importate nel vostro database la tabella movies in allegato
4 - inserite le vostre credenziali per il database nel file .env
5 - Create un model Movie php artisan make:model Movie
6 - Create un controller che gestirà la rotta /  usando il comando php
    artisan make:controller Guest/PageController
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database
    e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

BONUS:
Stilare il layout nei dettagli con Sass
 -->

@extends("layouts.app")

@section("content")
<section class="bg-primary py-5">
    <div class="container">
        <div class="row row-cols-md-5 g-4">
            @foreach($movies as $movie)
            <div class="col-auto">
                <div class="card h-100">
                    <img src="https://picsum.photos/300/200" class="p-1">
                    <div class="card-body">
                        <h2>{{$movie->title}}</h2>
                        <h5>{{$movie->original_title}}</h5>
                        <div>Nationality: {{$movie->nationality}}</div>
                        <div>Date: {{$movie->date}}</div>
                        <div>Vote: {{$movie->vote}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection