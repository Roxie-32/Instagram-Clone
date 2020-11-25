@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="/asset/2.png" alt="" class="rounded-circle ">
       </div>
       <div class="col-9 pt-5 pl-5">
           <div class="d-flex justify-content-between align-items-baseline">
           <h1 class="">{{$user->username}}</h1>
           <a href="/p/create">Add a new post</a>
           </div>
           <div class="d-flex">
               <div class="pr-5"><strong>{{$user->posts()->count()}}</strong>posts</div>
               <div class="pr-5"><strong>212</strong>followers</div>
               <div class="pr-5"><strong>212</strong>following</div>
           </div>
           <div>
               <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
               <div>{{$user->profile->description}}</div>
               <div class="pt-2"><a href="">{{$user->profile->url}}</a></div>
           </div>
       </div>
   </div>
   <div class="row pt-5">
       
       @foreach ($user->posts as $post)
   <div class="col-4 pb-4"><img src="/storage/{{$post->image}}" class="w-100" alt=""></div>
       @endforeach
   </div>
</div>
@endsection
