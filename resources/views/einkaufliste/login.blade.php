<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EINKAUFLISTE | Regestriere dich hier</title>
</head>
<body style="text-align:center">  
<div
    class="bg-gray-50 border border-gray-200 p-10
    rounded max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Logge dich jetzt ein</h2>
      <p class="mb-4">Logge dich ein um deine Einkaufliste zu sehen</p>
    </header>

    <form method="POST" action="/users/authenticate">
      @csrf

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
          Passwort
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
          value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Einloggen
        </button>
      </div>

      <div class="mt-8">
        <p>
          Du hast noch keinen Account?
          <a href="/register" class="text-laravel">Jetzt regestrieren</a>
        </p>
      </div>
    </form>
</div>
</body>
</html>