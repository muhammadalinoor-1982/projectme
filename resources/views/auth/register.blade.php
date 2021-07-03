@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            @php
                                if(old("gender")){
                                    $gender = old('gender');
                                }elseif(isset($user)){
                                    $gender = $user->gender;
                                }else{
                                    $gender = null;
                                }
                            @endphp
                            <div class="col-md-6">
                                <input name="gender" @if($gender =='male') checked @endif value="male" type="radio" id="male"> <label for="male">Male</label>
                                <input name="gender" @if($gender =='female') checked @endif value="female" type="radio" id="female"> <label for="female">Female</label>
                                <input name="gender" @if($gender =='others') checked @endif value="others" type="radio" id="others"> <label for="others">Others</label>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>
                            @php
                                if(old("user_type")){
                                    $user_type = old('user_type');
                                }elseif(isset($user)){
                                    $user_type = $user->user_type;
                                }else{
                                    $user_type = null;
                                }
                            @endphp
                            <div class="col-md-6">
                                <input name="user_type" @if($user_type =='admin') checked @endif value="admin" type="radio" id="admin"> <label for="admin">Admin</label>
                                <input name="user_type" @if($user_type =='supervisor') checked @endif value="supervisor" type="radio" id="supervisor"> <label for="supervisor">Supervisor</label>
                                <input name="user_type" @if($user_type =='agent') checked @endif value="agent" type="radio" id="agent"> <label for="agent">Agent</label>
                                @error('user_type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_status" class="col-md-4 col-form-label text-md-right">{{ __('User Status') }}</label>
                            @php
                                if(old("user_status")){
                                    $user_status = old('user_status');
                                }elseif(isset($user)){
                                    $user_status = $user->user_status;
                                }else{
                                    $user_status = null;
                                }
                            @endphp
                            <div class="col-md-6">
                                <input name="user_status" @if($user_status =='active') checked @endif value="active" type="radio" id="active"> <label for="active">Active</label>
                                <input name="user_status" @if($user_status =='inactive') checked @endif value="inactive" type="radio" id="inactive"> <label for="inactive">Inactive</label>
                                @error('user_status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
