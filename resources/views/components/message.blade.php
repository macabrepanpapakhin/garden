@if(session()->has('message'))
<div  x-data="{show:true}" x-init="setTimeout(()=>show=false,1500)" x-show="show" class="fixed top-0 transform bg-laravel text-black px-48 py-3 left-1/2 -translate-x-1/2">
<p>
    {{session('message')}}
</p>
</div>
@endif