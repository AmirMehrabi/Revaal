@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="w-2/5 mx-auto">
            <div class="card bg-gray-300 p-3">
                <div class="card-header h1 pb-4">
                    <h1 class="text-xl border-b border-gray-600 mb-4">{{ __('ثبت نام') }}</h1>
                    <hr>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام و نام خانوادگی') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('کلمه‌ی عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تَکرار کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input bg-white border border-grey-400 rounded p-2 text-xs w-full mb-5 form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary button p-2 bg-blue-400 text-white rounded">
                                    {{ __('ثبت نام') }}
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
