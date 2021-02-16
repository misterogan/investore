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
                    <h2 style="color: #012970;text-align: center">Pendaftaran Investore</h2>
                    <div class="alert-message" role="alert"></div>
                        <div class="form-group">
                            <label for="name">Nama Lengkap :</label>
                            <input type="text" name="full_name" id="full_name"/>
                        </div>

                    <div class="form-radio">
                        <label for="gender" class="radio-label">Jenis Kelamin :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="pria" value="pria">
                            <label for="pria">Pria</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="wanita" value="wanita">
                            <label for="wanita">Wanita</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="form-row">
                        <div class="form-group" style="width: 20%;">
                            <label for="state">&nbsp;</label>
                            <div class="form-select">
                                <select name="phone_code" id="phone_code">
                                    <option value="62">+62</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group" style="width: 80%;">
                            <label for="city">No Telepon :</label>
                                <input type="text" name="phone" id="phone" />

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pincode">Kata Sandi :</label>
                        <input type="password" name="password" id="password">
                    </div>

                    <div class="form-check">

                            <label for="faq" style="font-weight: 100"> <input type="checkbox" name="faq" id="faq" style="width: auto;">
                                Saya telah membaca dan saya setuju dengan  <a href="#" class="term-service">Kebijakan Privasi & Syarat Ketentuan</a>.</label>



                            <input type="checkbox" name="send_email" id="send_email"  style="width: auto;">
                            <label for="send_email" style="font-weight: 100">Izinkan Investore untuk mengirimkan saya informasi melalui email.</label>


                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Daftar" class="submit" style="width: 100%;" name="submit" id="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@section('js')
    <script src="{{url('/assets/js/users/register.js')}}" type="application/javascript" ></script>
@endsection

@endsection
