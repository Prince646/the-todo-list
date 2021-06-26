

@extends('todos.layout') 

@section('content')

{{-- <h1>Edit Items</h1> --}}

    <h1 class="text-3xl  
                border-b
                border-red-600 
                pb-5" > 
                Update Item</h1>
    <br>
    <h2>{{$todo->title}}</h2>
        <x-alert /> 
        <form method="post" action= "{{route('todo.update', $todo->id)}}" class="py-6">  
            
            @csrf  
            @method('patch')

            <input value="{{$todo->title}}" 
                    type="text" 
                    name="title" 
                    class="py-2 px-2 border-4 rounded-lg" />  
            
            <input type="submit" 
                    value="Update" 
                    class="p-2 border rounded-lg" />  
        </form>
    
        <a href="{{route('todo.index')}}" class="m-5 py-1 px-2 bg-white-600 border-4 cursor-pointer rounded "> Back</a>


@endsection