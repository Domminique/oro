@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
     <img src="/3.svg" alt="" style="height:70px" class="rounded-circle">
        
        </div>
         <div class="col-9 pt-5" >
         <div class="d-flex justify-content-between align-items-baseline">
         <h1>{{ $user->username}}</h1>
         <a   href="{{ route('register') }}"> 
         <button class="btn btn-primary btn-large">Create a new Service</button></a>
         
         </div>
          <div class="d-flex">
            <div class="pr-5"><strong>153 </strong>Posts</div>
            <div class="pr-5"><strong>23k </strong>followers</div> 
            <div class="pr-5"><strong>212  </strong>Following</div>
          </div>
                                                              
           <div class="pt-4"> <strong>{{$user->profile->title}}</strong> </div>
          <div>{{$user->profile->description}}</div>
          <div>{{$user->profile->url ?? 'Rongai Noon'}}</div>
           <br>           
         </div>
        
    </div>
    <div class="row pt-4">
      <div class="col-4">
               <img src="/1.jpg" class="w-100 "  >
      </div>
     <div class="col-4">
         <img src="/2.jpg" class="w-100 "  >
     </div>
      <div class="col-4">
          <img src="/5.jpg" class="w-100 " >
      </div>  
    </div>
</div>
@endsection
 