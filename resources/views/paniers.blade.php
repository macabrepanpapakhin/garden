@vite('resources/js/control.js')
@vite('resources/css/app.css')
<div class="mt-[50px] ml-[200px]">
  <x-layout :register="1" :login="1" :contribute="0" :subscribe="0" :home="1" />
</div>

@if($paniers && count($paniers)>0)
   @foreach($paniers as $panier)
   <x-panier :panier=$panier/>
   @endforeach
   @else
   <p class="ml-[200px] mt-[150px] font-bold">No Content Available!</p>
   @endif

   <!-- <div class="mt-6 p-4">
   //   {{$paniers->links()}}
   </div> -->
