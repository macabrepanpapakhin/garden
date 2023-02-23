<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/style.css')
  @vite('resources/css/app.css')
  @vite('resources/js/control.js')
</head>
<!-- style="background-image: url('{{ asset('images/bagan.jpg')}}');" class="bg-cover" -->
<body >

<video muted  id="myVideo">
          <source src="{{asset('video/theforest.mp4')}}" type="video/mp4" >
         
        Your browser does not support the video tag.
        </video>
        <div class="content">
          <div class="mt-[50px] mx-[200px]"><x-layout :register="0" :login="1" :contribute="0" :subscribe="0" :home="1" /></div>
        
<div class="max-w-5xl pt-10 mt-1 mx-[200px]">

</div>
<div class="grid grid-cols-2">
  
  <div><div class="w-full max-w-xs mx-auto  mt-[100px] bg-white p-[20px] rounded-lg">

<div class="mb-4 ">
<p class="mb-[30px] text-blue-700 font-bold">Register Form</p>
<form method="POST" action="/register">
  @csrf 
<label for="website-admin" class="block mb-2 text-sm font-medium text-blue-600 font-bold">Username</label>
       
      </label>
      <input    value="{{old('username')}}" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
      @error('username')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
    </div>
    <div class="mb-6">
    <label for="website-admin" class="block mb-2 text-sm font-medium text-blue-600 font-bold ">Pasword</label>
       
      </label>
      <input    value="{{old('password')}}" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password">
      @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
    </div>
    <div class="mb-6">
    <label for="website-admin" class="block mb-2 text-sm font-medium text-blue-600 font-bold">Confirm Password</label>
       
      </label>
      <input name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
       id="password" type="password"
       value="{{old('password_confirmation')}}">
      @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
       @enderror
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
    </div>
    </form>
</div></div>
<div class="mt-[100px] mx-auto leading-10">
   
</div>
</div>

</div>
</body>
</html>