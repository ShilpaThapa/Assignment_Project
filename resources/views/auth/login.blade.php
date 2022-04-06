@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Login</h4>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-3">
                                    <label for="">Email Address</label>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <input id="email" type="email"
                                        class="form-control form-control-sm @error('email') is-invalid @enderror"
                                        name="email" placeholder="Enter email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 col-md-3">
                                    <label for="">Password</label>
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <input id="password" type="password"
                                        class="form-control form-control-sm @error('password') is-invalid @enderror"
                                        placeholder="Enter password" name="password" required
                                        autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <p class="mb-1">
                                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                    </p>

                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-success btn-sm"><i
                                        class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
