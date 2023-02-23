<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    @vite('resources/js/control.js')
    @vite('resources/css/app.css')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Jardin</title>
  </head>
  <body class="bg-gray-100">
 
    <div class="max-w-5xl pt-10 mt-1 mx-auto">
      <x-message />
    <x-layout :register="1" :login="1" :contribute="1" :subscribe="1" :home="0"/>
      <div
        class="max-w-4xl border-2 border-inherit border-slate-200  bg-slate-100 prose prose-indigo w-full h-56 md:h-64" id="topscroll" >
        <img
          src="{{asset('/images/paris-nature2.jpg')}}"
          alt="Mother Nature"
          class="w-36 ml-6 aspect-[1/1] md:w-64 sm:rotate-[-6deg] rounded-lg shadow-lg rotate-[-10deg] mt-[5px] p-[10px] object-cover object-center float-right"
        />
        <p
          class="text-[33px] md:text-[44px] lg:text-[66px] first-letter:text-[#1d9137] px-6 w-128 font-mono"
        >
         Exploring The Mother Nature
        </p>
      </div>
</div>

     
      
  @if($paniers && count($paniers)>0)
   @foreach($paniers as $panier)
   <x-panier :panier=$panier/>
   @endforeach
   @else
   <p class="ml-[200px] mt-[150px] font-bold">No Content Available!</p>
   @endif
    <div class="mt-[100px] pl-[200px] pr-[250px] mb-[100px]">
      {{$paniers->links()}}
    </div>
  </body>
</html>
