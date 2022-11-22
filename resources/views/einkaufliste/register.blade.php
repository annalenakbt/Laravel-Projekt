<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EINKAUFLISTE | Regestriere dich hier</title>
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

    .btn3 {
      line-height: 50px;
      height: 50px;
      text-align: center;
      width: 150px;
      cursor: pointer;
    }


    .btn3 {
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

    .btn3:hover,
    .btn3:focus {
      background-color: #988E99;
    }
  </style>
  <div class="bg-gray-50 border border-gray-200 p-10
    rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Regstriere dich jetzt hier</h2>
      <p class="mb-4">Erstelle deinen Account</p>
    </header>

    <form method="POST" action="/users">
      @csrf
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2"> Name </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

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
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password2" class="inline-block text-lg mb-2">
          Passwort wiederholen
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value="{{old('password_confirmation')}}" />

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <p>
      <div class="mb-6">
        <button class="btn2" type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Regestrieren
        </button>
      </div>
      </p>

      <div class="mt-8">
        <p>
          Du hast schon einen Account?
        </p>
      </div>
    </form>
    <form class="inline" method="GET" action="/login">
      @csrf
      <button class="btn2" type="submit">
        Login
      </button>
    </form>
  </div>
</body>

</html>