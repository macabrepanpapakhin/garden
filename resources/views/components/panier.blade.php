@props(['panier'])
<div class="mx-auto max-w-5xl pt-10 mt-1 pr-[30px]">
<div class="leading-10">
<h2 class="font-bold text-[18px]"> {{$panier->title}}</h2>
  <p class="pt-3">{{$panier->body}} </p>
  <div class="grid grid-cols-2 mt-[20px] content-center">
    <div class="flex justify-items-center">
      <div class="mt-3">
        <img src="{{asset('/images/bagan.jpg')}}" width="100px" height="100px" class="rounded-lg"/>
      </div>
      <div class="flex flex-col pl-[16px]">
        <p class="font-bold">{{$panier->username}}</p>
        <p class="italic">{{$panier->created_at}}</p>
      </div>
    </div>
    <div class="grid grid-cols-2">
      <form>
        <button type="submit" class="font-bold">Love</button><p>12</p>
      </form>
      <form>
        <button type="submit" class="font-bold">Thoughts</button><p>18</p>
      </form>
    </div>
  </div>
</div>
<div class="border-[0.5px] border-black mt-5"></div>
</div>