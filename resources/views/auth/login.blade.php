@extends('auth/auth_template')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Photo</b>Share</a>
  </div>
  <!-- /.login-logo -->
  <div class="card ">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Veuillez vous connecter</p>

      <form action="{{ route('login') }}" method="post">
	  {{ csrf_field() }}
        <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
          	<input type="email" id="email" name="email" class="form-control" placeholder="Email">
          	<div class="input-group-append">
            	<div class="input-group-text">
              		<span class="fas fa-envelope"></span>
				</div>
		  	</div>
		</div>
		
        <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
			<input type="password" name="password" id="password" class="form-control" placeholder="Password">
          	<div class="input-group-append">
            	<div class="input-group-text">
              		<span class="fas fa-lock"></span>
            	</div>
		  	</div>
		</div>
		
        <div class="row">
          <div class="col-7">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Se souvenir
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}">J'ai perdu mon mot de passe</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Créer un compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection