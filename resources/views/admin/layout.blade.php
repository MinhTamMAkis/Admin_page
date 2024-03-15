<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Simp App</title>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="{{asset('resources/css/login.css')}}">
    </head>
    <body>
            
           
        <div class="container" id="container">
        
                <div class="form-container login-container">
                    <form class="form-lg" action="{{route('login')}}" method="POST" id="login-form">
                        @csrf
                        <h1>Login here.</h1>
                        <div class="form-control2">
                            <input type="email" class="email-2" placeholder="Email" name="email_log">
                            <small class="email-error-2"></small>
                            <span></span>
                        </div>
                        <div class="form-control2">
                            <input type="password" class="password-2" placeholder="Password" name="password_log">
                            <small class="password-error-2"></small>
                            <span></span>
                        </div>

                        <div class="content">
                            <div class="checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="">Remember me</label>
                            </div>
                            <div class="pass-link">
                            <a href="#">Forgot password</a>
                            </div>
                        </div>
                        <button type="submit" value="submit" id="login-button">Login</button>
                        <span>Or use your account</span>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                            <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </form>
            </div>
        
       

            <div class="form-container register-container">
                    <form action="{{ route('register') }}" method="POST" id="register-form">
                        @csrf
                        <h1>Register here</h1>
                        <div class="form-control">
                            <input type="text" id="username" placeholder="Name" name="name"/>
                            <small id="username-error"></small>
                            <span></span>
                        </div>
                        <div class="form-control">
                            <input type="email" id="email" placeholder="Email" name="email"/>
                            <small id="email-error"></small>
                            <span></span>
                        </div>
                        <div class="form-control">
                            <input type="password" id="password" placeholder="Password" name="password"/>
                            <small id="password-error"></small>
                            <span></span>
                        </div>
                        <button type="submit" value="submit" name="form_register" id="register-button">Register</button>
                        <span>or use your account</span>
                        <div class="social-container">
                            <a href="#" class="social"
                            ><i class="fa-brands fa-facebook-f"></i
                            ></a>
                            <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                            <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                            <h1 class="title">
                            Hello <br />
                            friends
                            </h1>
                            <p>If you have an account, login here and have fun</p>
                            <button class="ghost" id="login" >
                                Login
                                <i class="fa-solid fa-arrow-left"></i>
                            
                            
                            </button>
                    </div>

                    <div class="overlay-panel overlay-right">
                            @error('email') {{ $message }} @enderror
                            <h1 class="title">
                            
                                @if(session('success'))
                                        {{ session('success') }}
                                @elseif(session('error'))
                                    {{ session('error') }}
                                @else
                                        Start now
                                @endif
                            </h1>
                            <p class="text-red">
                                
                            </p>
                            <button class="ghost" id="register">
                            Register
                            <i class="fa-solid fa-arrow-right"></i>
                            </button>
                    </div>
                </div>
            </div>

        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{asset('resources/js/login.js')}}"></script>
   <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get references to the forms and buttons
            const loginForm = document.getElementById("login-form");
            const registerForm = document.getElementById("register-form");
            const loginButton = document.getElementById("login-button");
            const registerButton = document.getElementById("register-button");

            // Add a click event listener to the login button
            loginButton.addEventListener("click", function (e) {
                // Prevent the default form submission behavior
                e.preventDefault();
                // Submit the login form
                loginForm.submit();
            });

            // Add a click event listener to the register button
            registerButton.addEventListener("click", function (e) {
                // Prevent the default form submission behavior
                e.preventDefault();
                // Submit the registration form
                registerForm.submit();
            });
        });
   </script>
    </html>
