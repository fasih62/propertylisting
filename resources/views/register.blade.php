<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                       <div class="d-flex justify-content-end social_icon">
                            <!-- <span><i class="fab fa-facebook-square"></i></span> -->
                           <a href="{{ url('auth/google') }}"><span><i class="fab fa-google-plus-square"></i></span></a>
                            <!-- <span><i class="fab fa-twitter-square"></i></span> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="name" placeholder="Enter Username Here" class="form-control p_input">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" placeholder="Enter Email here" class="form-control p_input">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control p_input">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Register" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
<!--                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="{{ route('register') }}">Sign Up</a>
                        </div>-->
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>