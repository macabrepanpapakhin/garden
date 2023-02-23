<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/style.css')
  @vite('resources/css/app.css')
</head>
<body style="background-image: url('{{ asset('images/bg.jpg')}}');">
<div class="max-w-5xl pt-10 mt-1 mx-auto">
  <div><x-layout :register="1" :login="0" :contribute="0" :subscribe="0" :home="1"/></div>

</div>

<div class="w-full max-w-xs mx-auto mt-[130px]">
  <form method="POST" action="/login" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <p class="mb-[30px] text-blue-700 font-bold">Login Form</p>
    <div class="mb-4">
      <label class="block text-blue-600 text-sm font-bold text-blue-600 mb-2" for="username">
        Username
      </label>
      <input name="username" value="{{old('username')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
    </div>
    <div class="mb-6">
      <label class="block text-blue-600 text-sm font-bold mb-2 text-blue-600" for="password">
        Password
      </label>
      <input name="password" value="{{old('password')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password">
     
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>
  </form>
 
</div>
</body>
</html>