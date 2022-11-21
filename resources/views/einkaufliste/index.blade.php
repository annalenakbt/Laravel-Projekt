<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Home</title>
</head>
<body>
    <h1>Hier siehst du all deine Einkäufe</h1>
    <h3>
        <a href="/create">Einkäufe hinzufügen</a>
    </h3>
    <h3>
        <x-alert />
    </h3>
    @foreach($einkäufe as $einkaufliste)
        <li>
            {{$einkaufliste->title}}
            <a href="{{asset('/' . $einkaufliste->id . '/edit')}}">Bearbeiten</a>
            <a href="{{asset('/' . $einkaufliste->id . '/completed')}}">Gekauft</a>
    @endforeach
</body>
</html>