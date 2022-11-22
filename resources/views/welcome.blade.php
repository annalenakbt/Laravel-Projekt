<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Home</title>
</head>

<body class="mb-48">

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
<h1>Herzliche Willkommen bei der Einkauflisten App</h1>
<h4>Logge dich ein oder registriere dich um loszulegen!</h4>
    <nav class="flex justify-between items-center mb-4">
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold uppercase">
                    Wilkommen {{auth()->user()->name}}
                </span>
            </li>
            <li>
                <p>
                <form class="inline" method="PoST" action="/logout">
                    @csrf
                    <button class="btn2" type="submit">
                        Ausloggen
                    </button>
                </form>
                </p>
            </li>

            @else

            <p>
            <form class="inline" method="GET" action="/register">
                @csrf
                <button class="btn2" type="submit">
                    Regestrieren
                </button>
            </form>
            </p>
            <form class="inline" method="GET" action="/login">
                @csrf
                <button class="btn2" type="submit">
                    Login
                </button>
            </form>

            @endauth
        </ul>
    </nav>
</body>

</html>