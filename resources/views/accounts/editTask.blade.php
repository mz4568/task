
@extends('accounts.userDashboard')

@section('content')

     <div  class="container-fluid">
        <div class="row" style="width:50%">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
              <a href="#" class="alert-link">{{ Session::get('message') }}</a>
            </div>
            @endif
          <form method="POST" action="{{route('update.task',$task->id)}}">
            @csrf
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">Title</span>
              <input type="text" class="form-control" name="title" value="{{$task->title}}" aria-describedby="sizing-addon1">
            </div>
             </br>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon2">Description</span>
              <textarea class="form-control" name="description" aria-describedby="sizing-addon2">{{$task->description}}
              </textarea>
             
            </div>
             </br>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon3">Deadline</span>

              <input type="text" id="datepicker" name="deadline" class="form-control">
            </div>
              </br>
              <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">Assignee ID</span>
              <input type="text" class="form-control" name="assignee_id" value="{{$task->assignee_id}}" aria-describedby="sizing-addon1">
            </div>
             </br>
             <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">Assigner ID</span>
              <input type="text" class="form-control" name="assigner_id" value="{{$task->assigner_id}}" aria-describedby="sizing-addon1">
            </div>
             </br>
            <button type="submit" class="btn btn-danger form-control">Update Task</button>
          </form>
        </div>
     </div>
@endsection

