<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Bearbeiten</title>
</head>
<body style="text-align:center">                                                
    <h1>Bearbeite deine Einkaufliste</h1>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$einkaufliste->title}}"/>
        <input style="display:none" type="number" name="id" value="{{$einkaufliste->id}}">
        <input type="submit" value="Bearbeiten" />
    </form>
    <break>
    <a href="/index">Zurück</a>
    </break>
</body>
</html>