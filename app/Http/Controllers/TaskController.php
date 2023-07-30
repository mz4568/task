<?php

namespace App\Http\Controllers;
use Notification;
use Notifiable;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Notifications\EmailNotification;
use Auth;
use Hash;
use Session;
class TaskController extends Controller
{
   
    public function userAccount()
    {
     return view ('accounts.userAccounts');
    
    }

    public function userRegistration(Request $request)

    {
     
        $userData=$request->all();
    
        User::insert([
           'name'=>$userData['name'],
           'user_id'=>$userData['user_id'],
           'email'=>$userData['email'],
           'password'=>Hash::make($userData['password'])
        ]);

         $notification = array(
        'message' => 'User registration completed successfully!',
        'alert-type' => 'success'
         );
             
     return redirect()->route("userAccount")->with($notification);
    }
    public function userDashboard()

    {
    
     return view('accounts.userDashboard');
    }

     public function userLogin(Request $request)

    {
     
        $loginData=$request->all();
        // dd($loginData);
       if(Auth::guard("web")->attempt([
        "email"=>$loginData['email'],"password"=>$loginData['password']])){
        
         $notification = array(
        'message' => 'User login successfully!',
        'alert-type' => 'success'
         );

        return redirect()->route("user.dashboard")->with($notification);

        }      
    }
    
     public function userTask()

    {
    
     return view('accounts.createTask');
    }

     public function allTask()

    {
     $allTask=Task::all();
     return view('accounts.showTask',compact('allTask'));
    }

     public function storeTask(Request $request)

    {
        $request->validate(
            [
                'title'       => 'required',
                'description' => 'required',
                'deadline'    => 'required',
                'assignee_id' => 'required',
                'assigner_id' => 'required'
            ],
            [
                'title.required'       => 'Title is required',
                'description.required' => 'Description is required',
                'deadline.required'    => 'Deadline is required',
                'assignee_id.required' => 'ID is required',
                'assigner_id.required' => 'ID is required'
            ]
        );

        $taskData=$request->all();
        // dd($taskData);

        Task::insert([
           'title'       =>$taskData['title'],
           'description' =>$taskData['description'],
           'deadline'    =>$taskData['deadline'],
           'assignee_id' =>$taskData['assignee_id'],
           'assigner_id' =>$taskData['assigner_id']
           
           
        ]);

     Session::flash('message', 'task added successfully!'); 
             
     return redirect()->route("create.task");
    }


     public function editTask($id)

    {
     $task=Task::find($id);
     return view('accounts.editTask',compact('task'));
    }

     public function updateTask(Request $request,$id)

    {
     
        $assigneeid=
           [
           
           'title'       =>$request->title,
           'description' =>$request->description,
           'deadline'    =>$request->deadline,
           'assignee_id' =>$request->assignee_id,
           'assigner_id' =>$request->assigner_id
           
        ];
        Task::where('id',$id)->update($assigneeid);

        User::where('user_id',$id)->update(['user_id' =>$request->assignee_id]);

        $userData=User::find($id);
        // dd($userData);

        $project = [
            'greeting' => 'Hi ',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you this is from text@gmail.com',
            'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => 57
        ];
        Notification::send($userData, new EmailNotification($project));
   
       
     Session::flash('message', 'task updated successfully!'); 
             
     return redirect()->route("all.task");
    }

    public function deleteTask($id)

    {
     
       Task::find($id)->delete();

        Session::flash('message', 'task deleted successfully!'); 
        return redirect()->route("create.task");

            
    }

     public function userLogOut()

    {
     
        Auth::guard("web")->logout();

        $notification = array(
        'message' => 'User logout successfully!',
        'alert-type' => 'success'
         );
        Session::flash('message', 'task deleted successfully!'); 
        return redirect()->route("userAccount")->with($notification);

            
    }

   
}
