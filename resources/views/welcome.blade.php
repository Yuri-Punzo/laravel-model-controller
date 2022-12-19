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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>

    </header>
    <!-- /header -->
    <main>

    </main>

</body>

</html>