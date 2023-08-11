@extends('layouts.app')

@section('content')
<div class="auth cflex p-y-50">
    <div class="delimiter" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">
        <div class="cauth max-w-450 mx-auto">
            <div class="text-center w-full m-b-35">
                <a href="index.php">
                    <img src="assets/images/logo-oval.png">
                </a>
                <h2 class="f-28 f-lg-20 c-primary text-uppercase m-t-15">Register</h2>
            </div>
            <form class="form" method="POST" action="{{ route('register') }}">
                <input type="text" name="full_name" placeholder="Full name" class="m-b-25">
                @error('full_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" name="email" placeholder="Email" class="m-b-25">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password" placeholder="Password" class="m-b-25">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="m-b-35">
                @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn-primary">Register</button>
            </form>
            <div class="text-center w-full m-t-75">
                <p class="f-14 f-lg-14 c-primary mb-0">Already have an account? <a href="login.php" class="c-secondary">Login</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
