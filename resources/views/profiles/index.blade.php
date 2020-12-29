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
         <a   href="/p/create"> 
         <button class="btn btn-primary btn-large">Create a new Post</button></a>
         
         </div>
          <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}} </strong>Posts</div>
            <div class="pr-5"><strong>23k </strong>followers</div> 
            <div class="pr-5"><strong>212  </strong>Following</div>
          </div>
                                                              
           <div class="pt-4"> <strong>gdfgdgd</strong> </div>
        
          <div>{{$user->profile->url ?? 'Rongai Noon'}}</div>
           <br>           
         </div>
        
    </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)
      <div class="col-4 pb-4">
        <img src="/storage/{{$post->image}}" class="w-100 "  >
      </div>
    @endforeach  
    </div>
</div>
@endsection
 