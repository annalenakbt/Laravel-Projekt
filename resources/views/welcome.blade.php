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
            @auth
            <li>
                <span class="font-bold uppercase">
                    Wilkommen {{auth()->user()->name}}
                </span>
            </li>
            <li>
            <a href="/listings/manage" class="hover:text-laravel"><i
                class="fa-solid fa-gear"></i> Manage Listings</a>
            </li>
            <li>
                <form class="inline" method="POST" action="/">
                    @csrf
                    <button type="submit">
                        Ausloggen
                    </button>
                </form>
            </li>

            @else
            <li>
                <a href="/register" class="hover:text-laravel"><i
                class="fa-solid fa-user-plus"></i> Registrieren</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i
                class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>
    </nav>
    
</body>
</html>