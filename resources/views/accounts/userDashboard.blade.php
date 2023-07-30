<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
   
  <style>

    .logOut{
    background: black;
    padding: 10px;
    color: white;
    font-size: 20px;
    }

    a:hover{
        color: brown;
        background: yellow;
        text-decoration: none;
        font-size: 20px;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h2>TASK</h2>
      <ul class="nav">
        <li class="active"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('create.task')}}">Create Task</a></li>
        <li><a href="{{route('all.task')}}">Task List</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
    
        <div style="text-align:right;">

           <a href="{{route('userLogOut')}}" class="logOut">LogOut </a>
   
        </div>
        </br> 
          <div class="row">
            <div class="col-sm-4">
              <div class="">
                <p>Wellcome To Task</p> 
                
              </div>
            </div>
         </div>
        @yield('content')
    </div>

  </div>
  
</div>
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</body>
</html>