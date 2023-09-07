@extends('layouts.app')
@section('content')
    <div class="flex bg-blue-400 my-3 justify-center p-3 shadow-xl">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-white w-fit text-4xl text-center py-4 border-b-2 border-b-white">Weird Media.</h1>
            <p class="text-xl text-white my-2 w-2/3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse optio vitae necessitatibus perferendis dignissimos sunt molestiae consectetur eum mollitia. Distinctio!
            </p>
            <a href="#" class="bg-white text-2xl border-2 border-[#82f63b] p-3 my-3 rounded-lg hover:bg-blue-400 hover:text-white">Get Started !</a>
        </div>
    </div>   

    <div class="container border-t-2 border-t-blue-500">
        <div class="flex justify-center flex-col items-center">
            <h1 class="text-black font-semibold mb-4 w-fit h-fit p-4 text-2xl border-b-blue-400 border-b-2">Recent Posts</h1>

            <div class="flex flex-row space-x-2">
                <div class="flex flex-col w-2/4 bg-slate-100 p-4 rounded-md">
                    <div class="flex flex-row items-center ">    
                        <img src="https://fastly.picsum.photos/id/479/200/300.jpg?hmac=24Y_2mfqS4Jh4cf1gOlnYGYBszrnuy3ebrKkszU885k" alt="profilePicture" class="rounded-full w-14 h-14">
                        <h1  class="text-xl mx-1">Haitham Dihaji</h1>
                    </div>
                    <p class="p-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, sint. Quibusdam, cumque voluptate.
                    </p>
                    <a href="#" class="text-blue-500 underline">Read More...</a>
                </div>
                <div class="flex flex-col w-2/4 bg-slate-100 p-4 rounded-md">
                    <div class="flex flex-row items-center ">    
                        <img src="https://fastly.picsum.photos/id/479/200/300.jpg?hmac=24Y_2mfqS4Jh4cf1gOlnYGYBszrnuy3ebrKkszU885k" alt="profilePicture" class="rounded-full w-14 h-14">
                        <h1  class="text-xl mx-1">Haitham Dihaji</h1>
                    </div>
                    <p class="p-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, sint. Quibusdam, cumque voluptate.
                    </p>
                    <a href="#" class="text-blue-500 underline">Read More...</a>
                </div>
                <div class="flex flex-col w-2/4 bg-slate-100 p-4 rounded-md">
                    <div class="flex flex-row items-center ">    
                        <img src="https://fastly.picsum.photos/id/479/200/300.jpg?hmac=24Y_2mfqS4Jh4cf1gOlnYGYBszrnuy3ebrKkszU885k" alt="profilePicture" class="rounded-full w-14 h-14">
                        <h1  class="text-xl mx-1">Haitham Dihaji</h1>
                    </div>
                    <p class="p-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, sint. Quibusdam, cumque voluptate.
                    </p>
                    <a href="#" class="text-blue-500 underline">Read More...</a>
                </div>
                <div class="flex flex-col w-2/4 bg-slate-100 p-4 rounded-md">
                    <div class="flex flex-row items-center ">    
                        <img src="https://fastly.picsum.photos/id/479/200/300.jpg?hmac=24Y_2mfqS4Jh4cf1gOlnYGYBszrnuy3ebrKkszU885k" alt="profilePicture" class="rounded-full w-14 h-14">
                        <h1  class="text-xl mx-1">Haitham Dihaji</h1>
                    </div>
                    <p class="p-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, sint. Quibusdam, cumque voluptate.
                    </p>
                    <a href="#" class="text-blue-500 underline">Read More...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container border-t-2 my-2 border-t-blue-500">
        <div class="flex justify-center flex-col items-center">
            <h1 class="text-black font-semibold mb-4 w-fit h-fit p-4 text-2xl border-b-blue-400 border-b-2">Recent Users</h1>
            <div class="flex flex-row space-x-2">
                <div class="flex items-center flex-col bg-slate-100 p-4 rounded-md">
                    <img src="https://picsum.photos/id/237/200/300" alt="ProfilePicture" height="350px">

                    <h1  class="text-2xl my-2 text-blue font-semibold mx-1">Haitham Dihaji</h1>

                    <span>Birthday : <span class="text-blue-400">29/07/2001</span> </span>
                    <span>Posts Counts : <span class="text-blue-400" >3</span> </span>

                    <a href="#" class="p-2 bg-blue-400 text-white text-lg my-2">View Profile</a>
                </div>
                <div class="flex items-center flex-col bg-slate-100 p-4 rounded-md">
                    <img src="https://picsum.photos/id/237/200/300" alt="ProfilePicture" height="350px">

                    <h1  class="text-2xl my-2 text-blue font-semibold mx-1">Haitham Dihaji</h1>

                    <span>Birthday : <span class="text-blue-400">29/07/2001</span> </span>
                    <span>Posts Counts : <span class="text-blue-400" >3</span> </span>

                    <a href="#" class="p-2 bg-blue-400 text-white text-lg my-2">View Profile</a>
                </div>
                <div class="flex items-center flex-col bg-slate-100 p-4 rounded-md">
                    <img src="https://picsum.photos/id/237/200/300" alt="ProfilePicture" height="350px">

                    <h1  class="text-2xl my-2 text-blue font-semibold mx-1">Haitham Dihaji</h1>

                    <span>Birthday : <span class="text-blue-400">29/07/2001</span> </span>
                    <span>Posts Counts : <span class="text-blue-400" >3</span> </span>

                    <a href="#" class="p-2 bg-blue-400 text-white text-lg my-2">View Profile</a>
                </div>
                <div class="flex items-center flex-col bg-slate-100 p-4 rounded-md">
                    <img src="https://picsum.photos/id/237/200/300" alt="ProfilePicture" height="350px">

                    <h1  class="text-2xl my-2 text-blue font-semibold mx-1">Haitham Dihaji</h1>

                    <span>Birthday : <span class="text-blue-400">29/07/2001</span> </span>
                    <span>Posts Counts : <span class="text-blue-400" >3</span> </span>

                    <a href="#" class="p-2 bg-blue-400 text-white text-lg my-2">View Profile</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-blue-400 flex flex-col justify-center " style="height:250px">
        <div class="flex items-center justify-center">
            <h1 class="text-white text-4xl z-fit h-fit">This is the footer !</h1>
        </div>

    </footer>
{{--     
    <span class="text-sm bg-blue-400">Made By Haitham Dihaji</span> --}}
@endsection