<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    {{-- <script src="https://kit.fontawesome.com/cf27b9c2cd.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"/> 
    
    <title>Todos</title>
</head>
<body>
    
    <div class="text-center flex justify-center pt-10">
       
       <div class="w-1/3 border border-blue-600 rounded py-5" >
        @yield('content')
       </div>

    </div>
</body>
</html>


