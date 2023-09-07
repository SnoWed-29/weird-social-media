@extends('layouts.app')
@section('content')
    <div class="flex flex-col my-3 p-2 w-full justify-center ">
        
        @if(!Auth::guest())
        <div class="flex flex-col my-2 w-2/4 mx-auto shadow-xl p-2">
            <div class="flex flex-row items-center my-2">
                <img src="https://picsum.photos/id/237/200/300" alt="ProfiLeImg" width="80px" style="height: 80px" class="rounded-full">
                <span class="text-xl mx-4 font-semibold">{{auth()->user()->name}}</span>
            </div>
            <div class="flex w-full">
                <form method="POST" class="w-full" action="/feed/add" >
                    @csrf
                    <textarea name="content" style="resize: none" class="w-full h-24 border-blue-400 border-2 rounded-sm"></textarea>
                    
                    <div class="flex items-center  justify-between">
                        <button type="submit" class="bg-blue-400 p-3 text-2lg my-2 text-white rounded-lg">Post</button>
                    </div>
                </form>  
            </div>
        </div>
        @endif
        
        @foreach ($feeds as $feed)
            
        <div class="flex flex-col my-2 w-2/4 mx-auto shadow-xl p-2">
            <div class="flex flex-row items-center justify-between my-2">
                <div class="flex flex-row items-center">
                    <img src="https://picsum.photos/id/237/200/300" alt="ProfiLeImg" width="80px" style="height: 80px" class="rounded-full">
                <span class="text-xl mx-4 font-semibold">{{$feed->user->name}}</span>
                
                </div>
                <form action="/feed/delete/{{ $feed->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">X</button>    
                </form>
            </div>
            <div class="flex w-3/4">
                <p>{{$feed->content}}</p>
            </div>
            <div class="flex items-center  justify-between">
                <a href="#" class="bg-blue-400 p-3 text-2lg my-2 text-white rounded-lg">Like</a>
                <span>{{$feed->likes}}<span class="text-blue-400"> Likes</span></span>
            </div>
        </div>
        @endforeach
    </div>
@endsection