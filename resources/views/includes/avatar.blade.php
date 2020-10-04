@if(Auth::user()->image)
	   <div class="container-avatar">
	            <img src="{{ route('user.avatar',['filename'=>Auth::user()->image]) }}" class="avatar" />
         </div>
@else 

<div class="container-avatar">
	            <img src="../storage/app/users/1601760595descarga.jpg" class="avatar" />
</div>


 @endif 
