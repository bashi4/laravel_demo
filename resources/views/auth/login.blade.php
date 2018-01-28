@extends('layouts.app')

@section('content')
<main class="main container pt-5">
  <div class="row justify-content-md-center">
    <div class="col-md-6">

      <div class="card">
        <div class="card-header">ログイン</div>
        <div class="card-block">
          <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email address</label>
              <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email" required autofocus>

              @if ($errors->has('email'))
                <span class="help-block alert alert-danger" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password">password</label>
              <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Enter password" required>
              @if ($errors->has('password'))
                  <span class="help-block alert alert-danger">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <label for="remember">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
