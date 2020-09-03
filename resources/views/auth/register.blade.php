@extends('auth/auth_template')

@section('content')
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="/"><b>Photo</b>Share</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Créer un compte</p>

            <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
                <div class="input-group mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Pseudo" value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">J'ai déjà un compte</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection
