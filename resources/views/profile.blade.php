@vite('resources/js/control.js')
@vite('resources/css/app.css')
<body style="background-image: url('{{ asset('images/paris-nature5.jpg')}}');">
<div class="mt-[50px] ml-[200px]">
  <x-layout :register="1" :login="1" :contribute="0" :subscribe="0" :home="1" />
</div>
<div
        class="max-w-4xl ml-[200px] mt-[50px] border-2 border-blue-600  bg-transparent prose prose-indigo w-full h-32" id="topscroll" >
    
        <img
          src="{{$user->profile?asset('storage/'.$user->profile):asset('/images/boy1.jpg')}}"
          alt="If you are seeing this, probably the image got deleted!"
          class="w-36 ml-6 aspect-[1/1] sm:rotate-[6deg] rounded-lg shadow-lg bg-white rotate-[10deg] p-[10px] object-cover object-center float-left"
        />
       
       
        <p
          class="text-[18px] text-white pl-[250px] w-128 font-mono mt-[50px]"
        >
         username : {{$user->username}}
        </p>
        
      </div>

@auth
@if(auth()->user()->id==$user->id)
<div class="max-w-4xl ml-[200px] mt-[28px]">
              <form method="POST" action="/profile/{{$user->username}}/update"  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2  inline"
                                name="profile"
                                accept="image/x-png,image/gif,image/jpeg" 
                                
                            />
                            <button class="text-white text-[22px] mt-5 ml-5 inline" type="submit">Submit</button>
</form>
                        </div>
<p class="text-white mt-[22px] ml-[200px] mr-[300px]">This is your profile. Once you set your username, you cannot change later. You can create a new account if you want. We used old money boys as default profile. You can change profile picture as you want by clicking choose file button.</p>
@else
<p class="text-white mt-[100px] ml-[200px]">This is not your profile. You can create many accounts as you want. Passwords are stored after hashing. </p>
@endif
@endauth
@guest
<p class="text-white mt-[100px] ml-[200px]">You are seeing this as someone who doesn't login to the website. You can create account easily.</p>
@endguest
</body>