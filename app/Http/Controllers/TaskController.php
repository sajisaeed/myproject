<?php 

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index(){
        
         $tasks = DB::table('tasks')->orderBy('name')->get();
       // $tasks = Task::all();
       // dd($tasks);
        return view ('tasks',compact('tasks'));
    }   

    public function store(Request $request){

        // DB::table('tasks')->insert([
        //    'name' => $request->name ,
        //    'created_at' => now(),
        //    'updated_at' => now()
        // ]);

        $task = new Task();
        $task->name = $request->name;
        $task->created_at = now();
        $task->updated_at = now();
        $task->save();
        
        return redirect()->back();
    }  

    public function delete($id){

        // DB::table('tasks')->where('id','=',$id)->delete();
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    } 

    public function update(Request $request){

       // $task = DB::table('tasks')->find($request->id);
       $task = Task::find($request->id);
        return view('update',compact('task'));
    }

    public function updateact(Request $request){

        // DB::table('tasks')->where('id','=',$request->id)->update([
        //     'name' => $request->name ,
        //     'created_at' => now(),
        //    'updated_at' => now()
        // ]);

        Task::where('id',$request->id)->update([
            'name' => $request->name,
            'updated_at' => now()
        ]);
        return redirect()->to('/');
    }

}