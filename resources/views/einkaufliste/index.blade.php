<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Home</title>
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="/register" class="hover:text-laravel"><i
                class="fa-solid fa-user-plus"></i> Registrieren</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i
                class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
        </ul>
    </nav>
    <h1>Hier siehst du all deine Einkäufe</h1>
    <h3>
        <a href="/create">Einkäufe hinzufügen</a>
    </h3>
    <h3>
        <x-alert />
    </h3>
    @foreach($einkäufe as $einkaufliste)
        <li>
            @if($einkaufliste->completed)
                <span style="text-decoration:line-through">{{$einkaufliste->title}}</span>
            @else 
                {{$einkaufliste->title}}
            @endif
            <a href="{{asset('/' . $einkaufliste->id . '/edit')}}">Bearbeiten</a>
            <a href="{{asset('/' . $einkaufliste->id . '/completed')}}">Gekauft</a>
            <a href="{{asset('/' . $einkaufliste->id . '/delete')}}">Löschen</a>
        </li>
    @endforeach
</body>
</html>