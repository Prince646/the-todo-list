
@extends('todos.layout') 

@section('content')
    <div class="flex
                justify-between 
                border-b
                border-red-600 
                pb-5
                px-5">

        <h1 class="text-3xl" >ALL ITEMS</h1>
        <a href="{{route('todo.create')}}" 
            class="mx-5 py-2 text-blue-600 cursor-pointer rounded text-white">
            <span class="fas fa-plus-square" /> Create New
             </a>
        <br>
        <br>
    </div> 
    
          <ul class="my-5"> 
              <x-alert />
                {{-- @if($todos -> count()>0) --}}
                        {{-- @foreach  --}}
                        @forelse($todos as $todo) 
                            <li class="flex justify-between p-2">
                                
                                <div>
                                    @include('todos.complete-button')
                                </div>
                                

                                @if ($todo->completed)
                                    <p class="line-through">  {{$todo->title}} </p> 
                                
                                    @else  
                                    <p>  {{$todo->title}} </p>
                                @endif
                                
                                <div>
                                    <a href="{{route('todo.edit',$todo->id)}}" 
                                        class="py-1 px-1 text-yellow-400 cursor-pointer rounded text-black "> 
                                        <span class="fas fa-edit  px-2" /> 
                                    </a>

                                
                                    <span class="fas fa-trash  px-2 text-red-600 cursor-pointer" 
                                            onclick="event.preventDefault();
                                            if(confirm('Want to Delete Item')) {
                                                document.getElementById('form-delete-{{$todo->id}}').submit()
                                            } " /> 

                                        <form style="display: none" 
                                        id="{{'form-delete-'.$todo->id}}"
                                        method="post" 
                                        action="{{route('todo.destroy',$todo->id)}}">
                        
                                        @csrf 
                                        @method('delete')
                                        </form>
                                    

                                </div>
                                                                                
                            </li>
                        {{-- @endforeach --}}
                       
                        @empty
                        <p >No Item has been added, Create an Item</p>
                       
                        @endforelse


                
                    {{-- @else 
                        <p >No Item has been added, Create an Item</p>
                @endif --}}
            </ul>

@endsection

