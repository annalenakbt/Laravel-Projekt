<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Create</title>
</head>
<body style="text-align:center">                                                
    <h1>Erstelle deine Einkaufliste</h1>
    <form action="/upload"method="post">
        @csrf
        <input type="text" name="titel" />
        <input type="submit" name="Create" />
    </form>
    <break>
    <a href="/index">Zurück</a>
    </break>
</body>
</html>