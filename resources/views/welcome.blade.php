<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EMC Church</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500"/>
    <!-- Styles -->
    <style>
        html {
    font-size: 62.5%;
}

* {
    margin: 0;
    padding: 0;
}

ul,
li {
    list-style: none;
}

input {
    border: none;
}

body {
    width: 100%;
    overflow-x: hidden;
}

.welcome-page-sV8 {
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.welcome-page-sV8 .background-PCa {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background-color: #2d8caf;
}

.frame-2-JaS {
    box-sizing: border-box;
    padding: 0rem 4.8rem 10.5rem 6rem;
    width: 52.4rem;
    max-width: 90%;
    height: auto;
    position: relative;
    display: flex;
    flex-direction: column;
    background-color: #ffffff;
    border-radius: 1rem;
    text-align: center;
}

.auto-group-2zpi-9b4 {
    margin: 0 auto;
    width: 100%;
    max-width: 41.6rem;
}

.emc-logo-boardfull-logo-on-white-2-wmp {
    width: 28.3rem;
    height: 23.9rem;
    object-fit: cover;
    vertical-align: top;
    margin: 0 auto;
}

.emc-vision {
    margin-top: 7rem; /* Add space between the paragraphs */
    max-width: 41.6rem;
    font-size: 1.4rem;
    font-weight: 400;
    line-height: 1.5;
    color: #3d3c3c;
    font-family: Poppins, 'Source Sans Pro';
    flex-shrink: 0;
}

.welcome-to-emm-management-system-sX4 {
    color: #297f9f;
    font-family: Montserrat, 'Source Sans Pro';
    font-size: 2.6rem;
    font-weight: 600;
    line-height: 1.1538461538;
    position: absolute;
    text-align: center;
    top: 21.5rem;
    left: 50%;
    transform: translateX(-50%);
    width: 28.7rem;
}


.frame-10-tqU {
    margin-top: 9rem; /* Adjust the margin-top value to move the button down */
    width: 100%;
    max-width: 28rem;
    height: 4.3rem;
    font-size: 1.7rem;
    font-weight: 500;
    line-height: 1.5;
    color: #ffffff;
    font-family: Poppins, 'Source Sans Pro';
    background-color: #2d8caf;
    border-radius: 0.6875rem;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}


    </style>
</head>
<body>
    <div class="welcome-page-sV8">
        <div class="background-PCa"></div>
        <div class="frame-2-JaS">
            <div class="auto-group-2zpi-9b4">
                <img class="emc-logo-boardfull-logo-on-white-2-wmp" src="{{ asset('img/emc-logo.png') }}" alt="EMC Logo">
                <p class="welcome-to-emm-management-system-sX4">
                    Welcome To EMM<br/>
                    Management System
                </p>
            </div>
            <p class="emc-vision">
                At Empowerment Mountain Church, our vision is Generations of Holy, Victorious, and Fulfilled people in Christ. We achieve this by raising HolyGhost Empowered Generation.
            </p>
            @if(Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Home</a>
                @else
                    <a class="frame-10-tqU btn btn-primary btn-rounded" href="{{ route('login') }}">GET STARTED</a>
                @endauth
            @endif
        </div>
    </div>


</body>
</html>
