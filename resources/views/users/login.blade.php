@extends('users.layout')

@section('content')
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="/reg/images/signup-img.jpg" alt="">
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" id="register_form">
                    <h2 style="color: #012970;text-align: center">Login Investore</h2>
                    <div class="alert-message" role="alert"></div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-group">
                        <label for="pincode">Kata Sandi :</label>
                        <input type="password" name="password" id="password">
                    </div>


                    <div class="form-submit">
                        <input type="submit" value="Login" class="submit" style="width: 100%;" name="submit" id="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@section('js')
    <script src="{{url('/assets/js/users/login.js')}}" type="application/javascript" ></script>
@endsection

@endsection
