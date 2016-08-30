<?php
use App\Task;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// show task dashboard
Route::get('/', function () {
	$tasks = Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [
    	'tasks' => $tasks
    	]);
});

// add new task
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create The Task...
    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});


// delete task
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});

// CRUD-BOOK-LIBRARY-LARAVEL
Route::resource('book', 'BookController');