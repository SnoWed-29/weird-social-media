<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
   <div class="container shadow-xl">
        <nav class="flex flex-row justify-between w-9/12 mx-auto">
            <div class="flex flex-row justify-start">
                <a href="#" class="p-4 text-xl text-white font-bold bg-blue-500">Home</a>
                <a href="/feed" class="p-4 text-xl text-blue-400 font-bold ">Feed</a>
            </div>
            <div class="flex justify-end">
                @if(Auth::guest())
                <a href="#" class="p-4 text-xl font- text-blue-500">Login</a>
                <a href="#" class="p-4 text-xl font-bold text-blue-500">Register</a>
                @else
                <a href="#" class="p-4 text-xl font-bold text-blue-500">{{auth()->user()->name}}</a>
                @endif
            </div>
        </nav> 
   </div>
   <div class="container w-9/12 mx-auto ">
        @yield('content')
   </div>
</body>
</html>