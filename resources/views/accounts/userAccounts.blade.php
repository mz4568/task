@extends('frontend.frontendMaster')
@section('allSection')

  
<div id="app">
  
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Account</h2>
                <ul class="bread-crumb">
                   
                    <li class="is-marked">
                        User Login/Registration
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Account-Page -->
    <div class="page-account u-s-p-t-80">
        <div class="container">
            <div class="row">
                <!-- Login -->
                <div class="col-lg-6">
                    <div class="login-wrapper">
                        <h2 class="account-h2 u-s-m-b-20">Login</h2>
                       <!--  <h6 class="account-h6 u-s-m-b-30">Welcome back! Sign in to your account.</h6> -->
                        <form method="post" action="{{route('user.login')}}">
                        	@csrf
                            <div class="u-s-m-b-30">
                                <label for="user-name-email">Email
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" name="email" id="user-name-email" class="text-field" placeholder="Email">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="login-password">Password
                                    <span class="astk">*</span>
                                </label>
                                <input type="password" name="password"  id="login-password" class="text-field" placeholder="Password">
                            </div>
                           
                         
                            <div class="m-b-45">
                                <button type="submit" class="button button-outline-secondary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login /- -->
                <!-- Register -->
                <div class="col-lg-6">
                    <div class="reg-wrapper">
                        <h2 class="account-h2 u-s-m-b-20">Register</h2>
                       <!--  <h6 class="account-h6 u-s-m-b-30">Registering for this site allows you to access your order status and history.</h6> -->
                        <form method="post" action="{{route('user.register')}}">
                        	@csrf
                            <div class="u-s-m-b-30">
                                <label for="user-name">Username
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="user-name" name="name" class="text-field" placeholder="Username">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="user-name">User ID
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="user-name" name="user_id" class="text-field" placeholder="User ID">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="email">Email
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="email" name="email"class="text-field" placeholder="Email">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="password">Password
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="password" name="password" class="text-field" placeholder="Password">
                            </div>
                           
                            <div class="u-s-m-b-45">
                                <button type="submit" class="button button-primary w-100">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register /- -->
            </div>
        </div>
    </div>
    <!-- Account-Page /- -->
</div>

@endsection


