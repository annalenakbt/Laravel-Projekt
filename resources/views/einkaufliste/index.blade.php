<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body class="mb-48">

    <style>
        body {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 12pt;
            background: #F2EFE9;
        }



        h1 {
            font-size: 25pt;
        }

        .btn {
            line-height: 50px;
            height: 50px;
            text-align: center;
            width: 200px;
            cursor: pointer;
        }


        .btn {
            background-color: #79717A;
            border-radius: 8px;
            border-style: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 40px;
            line-height: 20px;
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

        .btn:hover,
        .btn:focus {
            background-color: #988E99;
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

    <nav class="flex justify-between items-center mb-4">
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth

            <p>
                <span class="font-bold uppercase">
                    Wilkommen {{auth()->user()->name}}
                </span>
            </p>

            <form class="inline" method="POST" action="/logout">
                @csrf
                <button class=btn2 type="submit">
                    Ausloggen
                </button>
            </form>

            @else
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Registrieren</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>
    </nav>
    <h1>Hier siehst du all deine Einkäufe</h1>
    <div class="Container">
        <div class="search">
            <input type="search" name="search" id="search" placeholder="Meine Einkäufe durchsuchen" class="form-control">
        </div>
    </div>
    <h3>
        <form class="inline" method="GET" action="/create">
            @csrf
            <button class="btn" type="submit">
                Einkäufe hinzufügen
            </button>
        </form>
    </h3>
    <h3>
        <x-alert />
    </h3>

    <tbody class="alldata"></tbody>

    @if (count($lists)==0)
    <p>Füge jetzt deine Einläufe hinzu</p>
    @else
    @foreach($lists as $einkaufliste)
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
    @endif

    <tbody id="Content" class="searchdata"></tbody>

    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();

            if ($value) {
                $('.alldata').hide();
                $('.searchdata').show();
            } else {

                $('.alldata').show();
                $('.searchdata').hide();

            }

            $.ajax({

                type: 'get',
                url: '{{URL::to('
                search ')}}',
                data: {
                    'search': $value
                },

                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
                }
            });

        })
    </script>


</body>

</html>