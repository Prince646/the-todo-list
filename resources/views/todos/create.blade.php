

{{-- useing one type of layout styles without retyping them all the time  --}}

@extends('todos.layout') 

@section('content')

    <h1 class="text-3xl  
                border-b
                border-red-600 
                pb-5"  > 
                Create Items</h1>
        <x-alert /> 
        <form method="post" action="{{route('todo.store')}}" class="py-6">  
            @csrf  

            <input type="text" name="title" class="py-2 px-2 border-4 rounded-lg" />  
            <input type="submit" value="Create" class="p-2 border rounded-lg" />  
        </form>
    
        <a href="{{route('todo.index')}}" class="m-5 py-1 px-2 bg-white-600 border-4 cursor-pointer rounded "> Back</a>

@endsection
