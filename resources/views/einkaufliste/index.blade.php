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
    <nav class="flex justify-between items-center mb-4">
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <div class="Container">
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Suche" class="form-control">
                </div>
            </div>
            <li>
                <span class="font-bold uppercase">
                    Wilkommen {{auth()->user()->name}}
                </span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        Ausloggen
                    </button>
                </form>
            </li>

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
    <h3>
        <a href="/create">Einkäufe hinzufügen</a>
    </h3>
    <h3>
        <x-alert />
    </h3>

    <tbody class="alldata"></tbody>

    @if (count($lists)==0)
    <p>Hello, please add ur Students to the list by clicking thie "Add Student"-Button</p>
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
        $('#search').on('keyup', function() 
        {
            $value=$(this).val();

            if($value)
            {
                $('.alldata').hide();
                $('.searchdata').show();
            }

            else{

                $('.alldata').show();
                $('.searchdata').hide();

            }

            $.ajax({

                type:'get',
                url:'{{URL::to('search')}}',
                data:{'search':$value},

                success:function(data)
                {
                    console.log(data);
                    $('#Content').html(data);
                }
            });

        })
    </script>


</body>

</html>