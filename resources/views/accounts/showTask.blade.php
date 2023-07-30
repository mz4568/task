
@extends('accounts.userDashboard')

@section('content')
<div class="container-fluid">
    <h2>All Task</h2>
    <div class="table-responsive">
        <table class="table table-hover">
           <tr>
                <th class="w-30">Title</th>
                <th class="w-50">Description</th>
                <th class="w-50">Deadline</th>
                <th class="w-50">Assignee ID</th>
                <th class="w-50">Assigner ID</th>
                <th class="w-50">Action</th>
            </tr>
            
            @foreach($allTask as $tasks)
            <tr align="center">
                <td>{{$tasks->title}}</td>
                <td>{{$tasks->description}}</td>
                <td>{{$tasks->deadline}}</td>
                <td>{{$tasks->assignee_id}}</td>
                <td>{{$tasks->assigner_id}}</td>
                <td><a href="{{route('edit.task',$tasks->id)}}">Edit</a>|<a href="{{route('delete.task',$tasks->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
 </div>
@endsection

