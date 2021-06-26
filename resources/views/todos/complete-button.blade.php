@yield('content')

 @if($todo->completed)  {{--checkinh to mark an item as completed --}}
                <span class="fas fa-check text-green-700 cursor-pointer p-2" 
                onclick="event.preventDefault();
                document.getElementById('form-incomplete-{{$todo->id}}').submit()" />

                        <form style="display: none" 
                        id="{{'form-incomplete-'.$todo->id}}"
                        method="post" 
                        action="{{route('todo.incomplete',$todo->id)}}">

                        @csrf 
                        @method('delete')
                        </form>

        @else 
 
        {{-- <span  onclick="event.preventDefault();console.log('hello') --}}
        <span  onclick="event.preventDefault();
                document.getElementById('form-complete-{{$todo->id}}').submit()"
                class="fas fa-check text-gray-300 cursor-pointer p-2" />

        <form style="display: none" 
                id="{{'form-complete-'.$todo->id}}"
                method="post" 
                action="{{route('todo.complete',$todo->id)}}">

        @csrf 
        @method('put')
        </form>

@endif