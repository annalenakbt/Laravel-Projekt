<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Erstellen</title>
</head>

<body style="text-align:center">

    <style>
        body {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 12pt;
            background: #F2EFE9;
        }

        .btn2 {
            line-height: 50px;
            height: 50px;
            text-align: center;
            width: 100px;
            cursor: pointer;
        }


        .btn2 {
            background-color: #79717A;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            font-weight: 500;
            height: 30px;
            line-height: 10px;
            list-style: none;
            margin: 0;
            outline: none;
            padding: 10px 16px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: color 100ms;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .btn2:hover,
        .btn2:focus {
            background-color: #988E99;
        }
    </style>

    <h1>Erstelle deine Einkaufliste</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" />
        <button class="btn2">Erstellen</button>
    </form>
    <p>
    <form class="inline" method="GET" action="/index">
        @csrf
        <button class="btn2" type="submit">
            Zurück
        </button>
        </p>
</body>

</html>