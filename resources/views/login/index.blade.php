<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="asset/css/login.css">
         
    <title>Login || Registration Pengaduan</title>
</head>
<body>
    
    <div class="container">
        {{-- Validation --}}
        @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        {{-- ----------- --}}
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="/login" method="POST">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="username" class="@error('username') is-invalid @enderror" id="username" placeholder="Enter your username" required autofocus>
                        <i class="uil uil-user"></i>
                        @error('username')    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" id="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                        @error('password')    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div> --}}

                    <div class="input-field">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        {{-- <input type="button" type="submit" value="Login Now"> --}}
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="/register" method="POST">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter your username" required>
                        <i class="uil uil-user"></i>
                        @error('username')    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                        @error('email')    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div> --}}
                    <div class="input-field">
                        <input type="password" class="password" name="password" id="password" placeholder="Create your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                        @error('password')    
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div> --}}

                    <div class="input-field">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Registration</button>
                        {{-- <input type="button" type="submit" value="Login Now"> --}}
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already Have Account?
                        <a href="/login" class="text login-link">Login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="asset/js/login.js"></script>

</body>
</html>