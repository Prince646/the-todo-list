<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnSelf;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

        $todos= auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos')); /*->with(['todos' => $todos]); */
    }

    public function create() {
        return view ('todos.create');
    }

    public function edit(Todo $todo) // route model binding 
    {
        
        return view ('todos.edit', compact('todo'));
    }

    public function store(TodoCreateRequest $request) {

        //custome messages in TodoCreateRequest
        // $userId = auth()->id();
        // $request['user_id'] = $userId;
        //Todo::create($request->all());
        
        auth()->user()->todos()->create($request->all());
        return redirect(route('todo.index'))->with('message', 'Item Created Successfully');
        
    }

    public function update (TodoCreateRequest $request, Todo $todo) 
    {
        // update the item
        $todo->update(['title' => $request->title]);  
        return redirect(route('todo.index'))->with('message', 'Item has been Updated');

    }

    public function complete(Todo $todo) 
    {
        $todo->update(['completed'=> true]); 
        return redirect()->back()->with('message', 'Item Has Been Completed');
    } 


    public function incomplete (Todo $todo) 
    {
        $todo->update(['completed'=> false]); 
        return redirect()->back()->with('message', 'Item is Incompleted');
   
    }


    public function destroy(Todo $todo) 
    {
        $todo->delete();
        return redirect()->back()->with('message', 'Item has been Deleted');
    }
}