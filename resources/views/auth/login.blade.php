<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login - {{config('app.name')}}</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ URL::asset('css/nifty.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ URL::asset('css/demo/nifty-demo-icons.min.css') }}" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ URL::asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('plugins/pace/pace.min.js') }}"></script>



    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ URL::asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">


    <style>

/* Reset CSS */
html, body {
    margin: 0;
    padding: 0;
    overflow: hidden; /* Prevent scrolling */
}

.login-content {
    align-items: center;
    background-color: #ffffff;
    border-radius: 1rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    height: 60.1rem;
    width: 49.5rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 1px 6.2rem 9.263rem 6.2rem;
    overflow: hidden;
}


.background-overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #2d8caf;
}

.login-content .login-image {
    width: 200px;
    height: auto;
    display: block;
    margin-bottom: 10px;
}

.login-title {
    font-size: 24px;
    color: #2d8caf;
    text-align: left;
    margin-bottom: 20px;
}

.login-content p {
    font-size: 16px;
    color: #2d8caf;
    text-align: left;
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 20px;
}
.mar-ver {
    margin-top: 10px; /* Adjusted margin top */
    text-align: center;
}

.pad-btm {
    padding-bottom: 10px;
}
.login-image {
    display: inline-block;
    margin-left: 20px; /* Adjusted margin left */
}
.form-control {
    width: 100%;
    padding: 15px; /* Adjusted padding */
    border: none;
    border-radius: 5px;
    border: solid 0.0688rem #2d8caf;
    font-size: 1.2rem;
    font-weight: 500;
    color: #2d8caf;
    font-family: Poppins, 'Source Sans Pro';
}

.checkbox {
    margin-bottom: 20px;
}

.checkbox label {
    font-weight: normal;
}

.btn-primary {
    background-color: #2d8caf;
    color: #ffffff;
    border: none;
    border-radius: 0.6875rem;
    padding: 10px;
    width: 100%;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #25769e;
}

.btn-link {
    color: #007bff;
    text-decoration: none;
}

.btn-link:hover {
    text-decoration: underline;
}




</style>


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div class="">
        <div class="background-overlay"></div>
        <div class="login-content">
            <div class="">
                <div class="">
                    <div class="mar-ver pad-btm">
                        <img src="{{ asset('img/emc-logo.png') }}" alt="Image" class="login-image"> <!-- Use the asset helper to include the image -->
                        <h1 class="login-title">Welcome Back 🤗🤝</h1>
                        <p>Sign In to your account</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" placeholder="Email " class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" placeholder="Password "  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="checkbox pad-btm text-left">
                            <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
                            <label class="font-weight-bold" for="demo-form-checkbox">Remember me</label>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                    </form>

                    <div class="pad-all">
                        <a href="{{ route('password.request') }}" class="btn-link mar-rgt">Forgot password ?</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--jQuery [ REQUIRED ]-->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ URL::asset('js/nifty.min.js') }}"></script>




    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="{{ URL::asset('js/demo/bg-images.js') }}"></script>

</body>
</html>
