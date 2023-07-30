
@extends('accounts.userDashboard')

@section('content')

     <div  class="container-fluid">
        <div class="row" style="width:50%">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
              <a href="#" class="alert-link">{{ Session::get('message') }}</a>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
           @endif
          <form method="POST" action="{{route('storeTask')}}">
            @csrf
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">Title</span>
              <input type="text" class="form-control" name="title" placeholder="Enter Title" aria-describedby="sizing-addon1">
            </div>
             </br>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon2">Description</span>
              <textarea class="form-control" name="description" placeholder="Enter Description" aria-describedby="sizing-addon2"></textarea>
             
            </div>
             </br>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon3">Deadline</span>

              <input type="text" id="datepicker" name="deadline" class="form-control" required>
            </div>
              </br>
              <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">Assignee ID</span>
              <input type="text" class="form-control" name="assignee_id" placeholder="Enter Assignee" aria-describedby="sizing-addon1">
            </div>
             </br>
             <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">Assigner ID</span>
              <input type="text" class="form-control" name="assigner_id" placeholder="Enter Assigner" aria-describedby="sizing-addon1">
            </div>
             </br>
            <button type="submit" class="btn btn-danger form-control">Add Task</button>
          </form>
        </div>
     </div>
@endsection

