@props(['register','login','contribute','subscribe','home'])

<div class="max-w-4xl border-2 border-inherit border-slate-200 pt-2 pb-2 text-blue-600 transition duration-[1500ms] z-10" >
     
     @guest
     @if($register=='1')
           <form class="font-mono p-[30px] inline" action="/register" method="GET"><button class="inline" type="submit">Register</button></form>
    
      @endif
      @if($login=='1')
        <form class="font-mono p-[30px] inline" action="/login" method="GET" ><button class="inline" type="submit">Login</button></form>
     
      @endif
      @endguest
      @if($contribute=='1')
        <form class="font-mono p-[30px] inline" action="/contribute" method="GET"><button class="inline" type="submit">Contribute</button></form>
   
      @endif
    
      @if($home=='1')
      <form class="font-mono p-[30px] inline" action="/" method="GET"><button class="inline" type="submit">Home</button></form>
      
      
      @endif

     
      @auth
      <form class="font-mono p-[30px] inline" action="/profile/{{auth()->user()->username}}" method="GET"><button class="inline" type="submit">Profile</button></form>
      
      <form class="font-mono p-[30px] inline" action="/logout" method="POST">@csrf<button class="inline" type="submit">Logout</button></form>
      
      
      @endauth
      </div>