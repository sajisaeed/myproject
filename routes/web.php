<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/about',function(){
    //$name = 'ledawi';
    // $name = request('name');
    // return view('about',[
    //   'name' => $name
    // ]);
    
    // return view('about')->with('name',$name);

//     return view('about', compact('name'));

// });


// Route::post('/store',function(){
//     $name = request('name');
//     return view('about', compact('name'));
// });

// Route::get('tasks',function(){
// $tasks = ['first'=>'Task1','second'=>'Task2','third'=>'Task3'];
// return view('tasks',compact('tasks'));
// });


// Route::get('show/{id}',function($id){
//     $tasks = ['first'=>'Task1','second'=>'Task2','third'=>'Task3'];
//     $task = $tasks[$id];
//     return view('show',compact('task'));
// });

Route::get('/',[TaskController::class,'index']);
Route::post('/store',[TaskController::class,'store']);
Route::post('delete/{id}',[TaskController::class,'delete']);
Route::post('update/{id}',[TaskController::class,'update']);
Route::put('updateact/{id}',[TaskController::class,'updateact'])->name('updateact');


// Route::get('app',function(){
//     return view('layout.app');
// });
