@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Register</h4>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        <div class="col-md-4">
                        <label for="name">Register As:</label>
                        </div>
                        <div class="col-md-7">
                            <input type="radio" class="btn-check" name="role" value="Employer" onchange="role_change('Employer')" id="success-outlined" autocomplete="off" checked>
                            <label class="btn btn-success btn-sm" for="success-outlined">Employer</label>
    
                            <input type="radio" class="btn-check" name="role" value="Job Seeker" onchange="role_change('Job Seeker')" id="danger-outlined" autocomplete="off">
                            <label class="btn btn-primary btn-sm" for="danger-outlined">Job Seeker</label>
    
                        </div>
                        </div>
                                                 
                        <div class="form-group row">
                            <div class="col-md-4">
                            <label for="name">Full Name</label>
                            </div>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" placeholder="Enter name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="company_name">

                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                            <label for="email">{{ __('Email Address') }}</label>
                            </div>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" placeholder="Enter email address" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                            <label for="phone_no">{{ __('Phone Number') }}</label>
                            </div>

                            <div class="col-md-7">
                                <input id="phone_no" type="text" class="form-control form-control-sm @error('phone_no') is-invalid @enderror" name="phone_no" placeholder="Enter phone number" value="{{ old('phone_no') }}" required autocomplete="phone_no">

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <div class="col-md-4">
                            <label for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">                            
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                            
                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" placeholder="Enter password again" required autocomplete="new-password">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-success btn-sm"><i
                                    class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Register</button>
                                </div>
                            </div>
                            
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        function role_change(role) {
            console.log(role);
            if (role=='Employer') {
                document.getElementById('company_name').
                innerHTML='<div class="form-group row"><div class="col-md-4"><label for="company_name">Company Name</label></div><div class="col-md-7"><input id="company_name" type="text" class="form-control form-control-sm" name="company_name" placeholder="Enter company name" required autocomplete="name" autofocus></div></div>';
            }
            else{
                document.getElementById('company_name').innerHTML='';
            }
        }
    </script>
@endpush
